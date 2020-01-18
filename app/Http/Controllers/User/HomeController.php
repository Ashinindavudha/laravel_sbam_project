<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Model\user\Post;
use App\Model\user\Category;
use App\Model\user\Tag;


class HomeController extends Controller
{
    public function index()
     {
     	$posts = Post::where('status',1)->orderBy('created_at','DESC')->paginate(2);
     	return view('user.index', compact('posts'));
;
     }
     public function tag(Tag $tag) {
          $posts = $tag->posts();
          return view('user.index', compact('posts'));
     }
     public function category(Category $category) {
     	//return $category = Category::where('slug', $slug)->get();
     	//return $request->all();
     	//dd($category);
     	$posts = $category->posts();
          return view('user.index', compact('posts'));
     }

     /*public function PostCategory(Category $category) {
           $categories = Category::all();
         return view('user.index', compact('categories'));
     }*/
}
