<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\CourseAdvertise;

class CourseAdvertiseController extends Controller
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
        $advertises = CourseAdvertise::all();
       
        return view('admin.courseadv.index', compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.courseadv.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            'image' => 'required'
        ]);
       

         if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new CourseAdvertise;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('advertise.index'))->with('success', 'Advertise Post was Created');
        //return $request->all();

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
         $advertise = CourseAdvertise::where('id',$id)->first();
        return view('admin.courseadv.edit', compact('advertise'));
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
        $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            'image' => 'required'
        ]);
       

         if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = CourseAdvertise::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('advertise.index'))->with('success', 'Advertise Post was Created');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseAdvertise::where('id', $id)->delete();
        return redirect()->back();
    }
}

