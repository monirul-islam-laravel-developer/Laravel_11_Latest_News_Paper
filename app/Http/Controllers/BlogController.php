<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    private $blogs;
    private $blog;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->blogs=Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',['blogs'=>$this->blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::storeBlog($request);
        Alert::success('Blog Create Successfully','');
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->blog=Blog::find($id);
        return view('admin.blog.edit',['blog'=>$this->blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::updateBlog($request,$id);
        Alert::success('Blog Update Successfully'.'');
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->blog=Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        Alert::success('Blog Delete Successfully'.'');
        return redirect('blog');
    }
}
