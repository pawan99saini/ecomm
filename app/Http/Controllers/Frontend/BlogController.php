<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs(){
        $blogs = Blog::all();
        return view('new-frontend.home.blog', compact('blogs'));
    }
    public function blogDetail($id){
        $blog = Blog::findOrFail($id);
        return view('new-frontend.home.blog-details', compact('blog'));
    }
    public function blogComment(Request $request) {
        $comment = BlogComment::create($request->all());
    }
}
