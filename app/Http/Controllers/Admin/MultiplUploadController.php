<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\MultiplUpload;

class MultiplUploadController extends Controller
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
        $multiples = MultiplUpload::all();
        return view('admin.MultiplUpload.index', compact('multiples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.MultiplUpload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Multiple Image Post

        $request->validate([
            "title" => 'required' ,
            "body" => 'required' ,
            "image" => 'required' ,
             
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new MultiplUpload;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image_name = $imageName;
        $post->status = $request->status;
        
        $post->save();

        return redirect(route('upload.index'))->with('success', 'English Department Post was Created');
       
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
        $uploads = MultiplUpload::where('id',$id)->first();
        return view('admin.MultiplUpload.edit', compact('uploads'));
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

        $post = MultiplUpload::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image_name = $imageName;
        $post->status = $request->status;
        
        $post->save();

        return redirect(route('upload.index'))->with('success', 'English Department Post was Updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MultiplUpload::where('id', $id)->delete();
        return redirect()->back()->with('success','English Department Post was Deleted Successfully');
    }
}
