<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\HistoryDepartment;
use Illuminate\Support\Facades\Auth;
class HistoryDepartmentController extends Controller
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
        $histories = HistoryDepartment::all();
       
        return view('admin.History.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.History.create');
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
            "title" => 'required | min:5' ,
            "body" => 'required | min:10' ,
            "image" => 'required |mimes:jpeg,jpg,png' ,
             
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new HistoryDepartment;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $imageName;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('history.index'))->with('success', 'HistoryDepartment Post was Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.History.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = HistoryDepartment::where('id',$id)->first();
        return view('admin.History.edit', compact('history'));
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
            "title" => 'required | min:5' ,
            "body" => 'required | min:10' ,
            //"image" => 'required |mimes:jpeg,jpg,png' ,
             
        ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }else{
            $imageName = request('oldimg');
        }

        $post = HistoryDepartment::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $imageName;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('history.index'))->with('success', 'HistoryDepartment Post was Created');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HistoryDepartment::where('id', $id)->delete();
        return redirect()->back()->with('success', 'HistoryDepartment Post was Deleted');
    }
}
