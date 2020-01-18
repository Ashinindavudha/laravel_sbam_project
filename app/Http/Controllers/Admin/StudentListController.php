<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\user\StudentList;

class StudentListController extends Controller
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
        $students = StudentList::all();
       
        return view('admin.studentlist.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.studentlist.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'reg'=>'required',
            'name' => 'required',
            'semester' => 'required',
            'roll' => 'required'
        ]);
   
        $post = new StudentList;
        $post->reg = $request->reg;
        $post->name = $request->name;
        $post->semester = $request->semester;
        $post->roll = $request->roll;
        $post->user_id = Auth::id();
        $post->save();
        return redirect(route('list.index'))->with('success', 'StudentList was Created');

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
        $student = StudentList::where('id',$id)->first();
        return view('admin.studentlist.edit', compact('student'));
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
            'reg'=>'required',
            'name' => 'required',
            'semester' => 'required',
            'roll' => 'required'
        ]);
   
        $post = StudentList::find($id);
        $post->reg = $request->reg;
        $post->name = $request->name;
        $post->semester = $request->semester;
        $post->roll = $request->roll;
        $post->user_id = Auth::id();
        $post->save();
        return redirect(route('list.index'))->with('success', 'StudentList was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentList::where('id', $id)->delete();
        return redirect()->back()->with('success', 'StudentList was Deleted');
    }
}
