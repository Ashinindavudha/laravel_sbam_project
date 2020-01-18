<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\StudentRegistration;

class StudentRegistrationController extends Controller
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
        $students = StudentRegistration::all();
        return view('admin.StudentRegistration.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.StudentRegistration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     'name', 'age', 'parent', 'preceptor', 'nativetwon', 'presenaddress', 'class', 'quality', 'phone', 'image',
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'name'=>'required',
            'age' => 'required',
            'parent' => 'required',
            'preceptor' => 'required',
            'nativetwon' => 'required',
            'presenaddress' => 'required',
            'class' => 'required',
            'quality' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);
*/
         if ($request->hasFile('image')) {
            //return $request->image->getClientOriginalName();
            $imageName = $request->image->store('public');
        }else{
            $imageName = '';
        }

        $post = new StudentRegistration;
        $post->image = $imageName;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->parent = $request->parent;
        $post->preceptor = $request->preceptor;
        $post->nativetwon = $request->nativetwon;
        $post->presenaddress = $request->presenaddress;
        $post->class = $request->class;
        $post->quality = $request->quality;
        $post->phone = $request->phone;
        $post->save();
        //return redirect(route('registration.index'))->with('success', 'Your Registraion was Completed');
        return redirect()->back()->with('success', 'Your Registraion was Completed');
    }

    /**name
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentRegistration::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Student Registration Record was Delete');
    }
}
