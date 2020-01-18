<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\ExamResult;

class ExamResultController extends Controller
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
        $results = ExamResult::all();
       
        return view('admin.maexamresult.index', compact('results'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maexamresult.create');
        
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
            'reg'=>'required',
            'name' => 'required',
            'roll' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'subone' => 'required',
            'subtwo' => 'required',
            'subthree' => 'required',
            'pass' => 'required'
        ]);
   
        $post = new ExamResult;
        $post->reg = $request->reg;
        $post->name = $request->name;
        $post->roll = $request->roll;
        $post->year = $request->year;
        $post->semester = $request->semester;
        $post->subone = $request->subone;
        $post->subtwo = $request->subtwo;
        $post->subthree = $request->subthree;
        $post->pass = $request->pass;
        $post->save();
        return redirect(route('result.index'))->with('success', 'MA ExamResult was Created');

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
        $student = ExamResult::where('id',$id)->first();
        return view('admin.maexamresult.edit', compact('student'));

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
            'roll' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'subone' => 'required',
            'subtwo' => 'required',
            'subthree' => 'required',
            'pass' => 'required'
        ]);
   
        $post = ExamResult::find($id);
        $post->reg = $request->reg;
        $post->name = $request->name;
        $post->roll = $request->roll;
        $post->year = $request->year;
        $post->semester = $request->semester;
        $post->subone = $request->subone;
        $post->subtwo = $request->subtwo;
        $post->subthree = $request->subthree;
        $post->pass = $request->pass;
        $post->save();
        return redirect(route('result.index'))->with('success', 'MA ExamResult was Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExamResult::where('id', $id)->delete();
        return redirect()->back()->with('success', 'ExamResult was Delete');
    }
}
