<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\ComputerDepartment;

class ComputerDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('can:posts.category');
    }

    public function index()
    {
        
        $computers = ComputerDepartment::all();
        return view('admin.ComputerDepartment.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ComputerDepartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => 'required' ,
            "body" => 'required' ,
            "image" => 'required' ,
             
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new ComputerDepartment;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $imageName;
        $post->status = $request->status;
        
        $post->save();

        return redirect(route('computer.index'))->with('success', 'ComputerDepartment Post was Created');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer = ComputerDepartment::where('id',$id)->first();
        return view('admin.ComputerDepartment.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => 'required' ,
            "body" => 'required' ,
            "image" => 'required' ,
             
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = ComputerDepartment::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $imageName;
        $post->status = $request->status;
        
        $post->save();

        return redirect(route('computer.index'))->with('success', 'Computer Department Post was Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ComputerDepartment::where('id', $id)->delete();
        return redirect()->back()->with('success','Computer Department Post was Deleted Successfully');
    }
}
