<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\EnglishEssay;

class EnglishEssayController extends Controller
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
        $researches = EnglishEssay::all();
       return view('admin.EnglishEssay.index', compact('researches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.EnglishEssay.create');
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
            'name'=>'required',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
       

         if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new EnglishEssay;
        $post->image = $imageName;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('essay.index'))->with('success', 'EnglishEssay Post was Created');
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
        $essay = EnglishEssay::where('id',$id)->first();
        return view('admin.EnglishEssay.edit', compact('essay'));
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
            'name'=>'required',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
       

         if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = EnglishEssay::find($id);
        $post->image = $imageName;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('essay.index'))->with('success', 'EnglishEssay Post was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EnglishEssay::where('id', $id)->delete();
        return redirect()->back()->with('message','EnglishEssay Delete Successfully');
    }
}
