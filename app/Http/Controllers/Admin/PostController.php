<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
       $posts = Post::all();
       return view('admin.posts.show', compact('posts'));
    }
    public function create()
    {
        if (Auth::user()->can('posts.create')) {
            $tags = Tag::all();
            $categories = Category::all();
            return view('admin.posts.post', compact('tags', 'categories'));
    
        }
        return redirect(route('admin.home'));
        
    }
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'title'=>'required|min:10',
            'subtitle' => 'required|min:10',
            'slug' => 'required',
            'body' => 'required|min:10',
            'image' => 'required'
        ]);
        /*if ($validator->fail()) {
            return back()->with('error', $validator->messages()->all([0])->withInput());
        }*/

         if ($request->hasFile('image')) {
            //return $request->image->getClientOriginalName();
            $imageName = $request->image->store('public');
        }

        $post = new Post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'))->with('success', 'Post was Created');
        //return $request->all();
    }
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //$post = Post::where('id',$id)->get(); return $post;
        if (Auth::user()->can('posts.update')) {
        $post = Post::with('tags','categories')->where('id',$id)->first();//return $post;
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.edit', compact('tags', 'categories','post'));
        }
        return redirect(route('admin.home'));

        //return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            //return $request->image->getClientOriginalName();
            $imageName = $request->image->store('public');
        }

        $post = Post::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect(route('post.index'))->with('success','Post Updated Successfully');
        
        //return $request->all();
    }
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back()->with('success','Post Delete Successfully');
        //return $id;
    }
}
