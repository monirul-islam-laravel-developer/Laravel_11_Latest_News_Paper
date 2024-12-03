<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontThemeController extends Controller
{
    public $theme;
    public $all_themes;
    public $themes8;
    public $themeId;
    public function index($categorySlug,$postSlug)
    {
        $this->themes8=Theme::where('status',1)->latest()->take(8)->get();
        $this->theme=Theme::where('slug',$postSlug)->first();
//        dd($this->theme);
//        dd($this->theme->sub_category->slug);
        return view('front.theme.index', [
            'theme' =>$this->theme,
            'themes8'=>$this->themes8
        ]);
    }
    public function allWebsite()
    {
        $this->all_themes=Theme::where('status',1)->orderBy('id','desc')->simplePaginate(12);
        return view('front.theme.allwebsite',['all_themes'=>$this->all_themes]);
    }
    public function searchWebsite(Request $request)
    {
        $searchTerm = $request->input('search');

        // Normalize the search term
        $normalizedSearchTerm = preg_replace('/\s+/', '', strtolower($searchTerm)); // Remove spaces and make lowercase

        // Get all themes based on the normalized search term
        $themes = Theme::when($searchTerm, function ($query) use ($normalizedSearchTerm) {
            // Normalizing columns for better matching
            $query->whereRaw("REPLACE(LOWER(name), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"])
                ->orWhereRaw("REPLACE(LOWER(software_version), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"])
                ->orWhereRaw("REPLACE(LOWER(detail), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"])
                ->orWhereRaw("REPLACE(LOWER(more_detail), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"])
                ->orWhereHas('category', function ($query) use ($normalizedSearchTerm) {
                    $query->whereRaw("REPLACE(LOWER(name), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"]);
                })
                ->orWhereHas('category', function ($query) use ($normalizedSearchTerm) {
                    $query->whereRaw("REPLACE(LOWER(description), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"]);
                })
                ->orWhereHas('sub_category', function ($query) use ($normalizedSearchTerm) {
                    $query->whereRaw("REPLACE(LOWER(name), ' ', '') LIKE ?", ["%{$normalizedSearchTerm}%"]);
                });
        })
            ->paginate(10);

        // If no themes are found, fallback to a broader search
        if ($themes->isEmpty()) {
            // Additional logic can go here if you want to show other relevant results.
        }

        return view('front.theme.search-website', compact('themes', 'searchTerm'));
    }





}
