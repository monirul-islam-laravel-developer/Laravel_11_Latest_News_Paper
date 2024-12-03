<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ThemeController extends Controller
{
    private $themes;
    private $theme;
    private $categories;
    private $subcategories;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->themes=Theme::orderBy('id','desc')->get();
        return view('admin.theme.index',[
            'themes'=>$this->themes,

            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->categories=Category::all();
        $this->subcategories=SubCategory::all();
        return view('admin.theme.create',[
            'categories'=>$this->categories,
            'subcategories'=>$this->subcategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Theme::storeTheme($request);
        Alert::Success('Theme Store Successfully'.'.');
        return redirect('/theme');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->theme=Theme::find($id);
        if ($this->theme->status==1)
        {
            $this->theme->status=0;
        }
        else
        {
            $this->theme->status=1;
        }
        $this->theme->save();
        Alert::success('Theme Status Upgrated','.');
        return redirect('theme');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->theme=Theme::find($id);
        $this->categories=Category::all();
        $this->subcategories=SubCategory::all();
        return view('admin.theme.edit',[
            'categories'=>$this->categories,
            'subcategories'=>$this->subcategories,
            'theme'=>$this->theme
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Theme::updateTheme($request,$id);
        Alert::success('Theme Info Update Successfully'.'');
        return redirect('theme');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->theme=Theme::find($id);
        if (file_exists($this->theme->image))
        {
            unlink($this->theme->image);
        }
        $this->theme->delete();
        Alert::success('Theme Delete Successfully'.'');
        return redirect('theme');
    }
}
