<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\MaFirst;

class MAFirstController extends Controller
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
        $mafirst = MaFirst::all();
       
        return view('admin.mafirst.index', compact('mafirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mafirst.create');
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
            'day'=>'required',
            'time' => 'required',
            'semester' => 'required',
            'subject' => 'required',
            'lecturer' => 'required'
        
        ]);
        

        $post = new MaFirst;
        
        $post->day = $request->day;
        $post->time = $request->time;
        $post->semester = $request->semester;
        $post->subject = $request->subject;
        $post->lecturer = $request->lecturer;
        $post->save();
        return redirect(route('first.index'))->with('success', 'Post was Created');

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
         $lecturer = MaFirst::where('id',$id)->first();
        return view('admin.mafirst.edit', compact('lecturer'));
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
            'day'=>'required',
            'time' => 'required',
            'semester' => 'required',
            'subject' => 'required',
            'lecturer' => 'required'
        
        ]);
        

        $post = MaFirst::find($id);
        
        $post->day = $request->day;
        $post->time = $request->time;
        $post->semester = $request->semester;
        $post->subject = $request->subject;
        $post->lecturer = $request->lecturer;
        $post->save();
        return redirect(route('first.index'))->with('success', 'TimeTable was Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MaFirst::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Post was Delete');
    }
}
