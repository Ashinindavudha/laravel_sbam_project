<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\SayadawPdf;

class SayadawPdfController extends Controller
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
        $pdfs = SayadawPdf::all();
        return view('admin.SayadawPdf.index', compact('pdfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.SayadawPdf.create');
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
            
            'title' => 'required',
            'body' => 'required',
            'pdf' => 'required'
        ]);
       

         if ($request->hasFile('pdf')) {

            $imageName = $request->file('pdf')->store('public');

        }

        $post = new SayadawPdf;
        $post->pdf = $imageName;
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('pdf.index'))->with('success', 'Ebook was Created');
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
        $topic = SayadawPdf::where('id',$id)->first();
        return view('admin.SayadawPdf.edit', compact('topic'));
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
            
            'title' => 'required',
            'body' => 'required',
            
        ]);
       
        $post = SayadawPdf::find($id);
       
        $post->title = $request->title;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        return redirect(route('pdf.index'))->with('success', 'Ebook was Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SayadawPdf::where('id', $id)->delete();
        return redirect()->back()->with('success','Sayadaw Ebook Delete Successfully');
    }
}
