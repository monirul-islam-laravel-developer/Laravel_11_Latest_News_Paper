<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    public $blogs;
    public $blog;
    public $themes12;
    public function index()
    {
        $this->blogs = Blog::where('status', 1)->orderBy('id', 'desc')->simplePaginate(9);

        return view('front.blog.index',['allblogs'=>$this->blogs]);
    }
    public function detail($id)
    {
        $this->themes12=Theme::where('status',1)->orderBy('id','desc')->simplePaginate(9);
        $this->blog=Blog::find($id);
        return view('front.blog.detail',[
            'blog'=>$this->blog,
            'themes12'=>$this->themes12
            ]);
    }
}
