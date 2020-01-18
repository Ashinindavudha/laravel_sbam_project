<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\CplugProgramming;
use Illuminate\Support\Facades\Auth;

class CplugProgrammingController extends Controller
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
        $programming = CplugProgramming::all();
       
        return view('admin.CplugProgramming.index', compact('programming'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CplugProgramming.create');
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
        $post = new CplugProgramming;
        $post->title = $request->title;
        $post->description= $request->description;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('cplug.index'))->with('success', 'C++ Programming Post was Created');
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
        $computer = CplugProgramming::where('id',$id)->first();
        return view('admin.CplugProgramming.edit', compact('computer'));
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
        $post = CplugProgramming::find($id);
        $post->title = $request->title;
        $post->description= $request->description;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('cplug.index'))->with('success', 'C++ Programming Post was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CplugProgramming::where('id', $id)->delete();
        return redirect()->back()->with('success', 'C++ Programming Post was Deleted');
    }
}
