<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class CatSubController extends Controller
{
    public function getSubCategory()
    {
        $this->categoryId = $_GET['id'];
        $this->subcategories= SubCategory::where('category_id',$this->categoryId)->get();
        return response()->json($this->subcategories);
    }

}
