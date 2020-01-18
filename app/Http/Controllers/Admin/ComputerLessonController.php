<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\ComputerLesson;
use Illuminate\Support\Facades\Auth;
 


class ComputerLessonController extends Controller
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
        $computers = ComputerLesson::all();
       
        return view('admin.ComputerLesson.index', compact('computers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ComputerLesson.create');
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
            "body" => 'required ' ,    
        ]);
        $post = new ComputerLesson;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('lesson.index'))->with('success', 'ComputerLesson Post was Created');

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
        $computer = ComputerLesson::where('id',$id)->first();
        return view('admin.ComputerLesson.edit', compact('computer'));
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
            "body" => 'required ' ,    
        ]);
        $post = ComputerLesson::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('lesson.index'))->with('success', 'ComputerLesson Post was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ComputerLesson::where('id', $id)->delete();
        return redirect()->back()->with('success', 'ComputerLesson Post was Deleted');
    }
}
