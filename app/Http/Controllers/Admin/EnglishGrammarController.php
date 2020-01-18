<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\EnglishGrammar;

class EnglishGrammarController extends Controller
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
        $grammars = EnglishGrammar::all();
        return view('admin.EnglishGrammar.index', compact('grammars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.EnglishGrammar.create');
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
            "name" => 'required' ,
            "body" => 'required' ,
            "status" => 'required' ,
             
        ]);

        $post = new EnglishGrammar;
        $post->title = $request->title;
        $post->name = $request->name;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        return redirect(route('grammar.index'))->with('success', 'English Grammar Post was Created');
       

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
        $grammar = EnglishGrammar::where('id',$id)->first();
        return view('admin.EnglishGrammar.edit', compact('grammar'));
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
            "name" => 'required' ,
            "body" => 'required' ,
            "status" => 'required' ,
             
        ]);

        $post = EnglishGrammar::find($id);
        $post->title = $request->title;
        $post->name = $request->name;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        return redirect(route('grammar.index'))->with('success', 'English Grammar Post was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EnglishGrammar::where('id', $id)->delete();
        return redirect()->back()->with('success','English Grammar Post was Deleted Successfully');
    }
}
