<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\PhpProgramming;
use Illuminate\Support\Facades\Auth;
class PhPLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $programming = PhpProgramming::all();
       
        return view('admin.PhPProgramming.index', compact('programming'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PhPProgramming.create');
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
            "description" => 'required' ,
            "body" => 'required ' , 
            "status" => 'required' ,   
        ]);
        $post = new PhpProgramming;
        $post->title = $request->title;
        $post->description= $request->description;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('programming.index'))->with('success', 'PhP Programming Post was Created');
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
        $computer = PhpProgramming::where('id',$id)->first();
        return view('admin.PhPProgramming.edit', compact('computer'));
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
            "description" => 'required' ,
            "body" => 'required ' , 
            "status" => 'required' ,   
        ]);
        $post = PhpProgramming::find($id);
        $post->title = $request->title;
        $post->description= $request->description;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('programming.index'))->with('success', 'PhP Programming Post was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         PhpProgramming::where('id', $id)->delete();
        return redirect()->back()->with('success', 'PHP Programming Post was Deleted');
    }
}
