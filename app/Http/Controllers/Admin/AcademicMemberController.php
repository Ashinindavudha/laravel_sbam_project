<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\AcademicMember;

class AcademicMemberController extends Controller
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
        $members = AcademicMember::all();
       
        return view('admin.acamember.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acamember.create');
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
            'designation' => 'required',
            'specialize' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);
        /*if ($validator->fail()) {
            return back()->with('error', $validator->messages()->all([0])->withInput());
        }*/

         if ($request->hasFile('image')) {
            //return $request->image->getClientOriginalName();
            $imageName = $request->image->store('public');
        }

        $post = new AcademicMember;
        $post->image = $imageName;
        $post->name = $request->name;
        $post->designation = $request->designation;
        $post->specialize = $request->specialize;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->save();
        return redirect(route('member.index'))->with('success', 'Post was Created');

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
        $member = AcademicMember::where('id',$id)->first();
        return view('admin.acamember.edit', compact('member'));
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
            'designation' => 'required',
            'specialize' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);
        /*if ($validator->fail()) {
            return back()->with('error', $validator->messages()->all([0])->withInput());
        }*/

         if ($request->hasFile('image')) {
            //return $request->image->getClientOriginalName();
            $imageName = $request->image->store('public');
        }

        $post = AcademicMember::find($id);
        $post->image = $imageName;
        $post->name = $request->name;
        $post->designation = $request->designation;
        $post->specialize = $request->specialize;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->save();
        return redirect(route('member.index'))->with('message','Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AcademicMember::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Post was Delete');
    }
}
