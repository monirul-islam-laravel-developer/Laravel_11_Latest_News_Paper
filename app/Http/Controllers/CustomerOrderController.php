<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    private $theme;
    public function index($id)
    {
        $this->theme=Theme::where('id',$id)->first();
        return view('front.order.index',['theme'=>$this->theme]);
    }
    public function completeOrder(Request $request)
    {
        return redirect()->route('home');
    }
}
