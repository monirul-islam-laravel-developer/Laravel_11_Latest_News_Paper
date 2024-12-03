<?php

namespace App\Http\Controllers;

use App\Models\Inquary;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InquaryController extends Controller
{
    public $inquary;
    public function inquary(Request $request)
    {
        $this->inquary= new Inquary();
        $this->inquary->name=$request->name;
        $this->inquary->email=$request->email;
        $this->inquary->whatsapp_number=$request->whatsapp_number;
        $this->inquary->whatsapp_number=$request->whatsapp_number;
        $this->inquary->message=$request->message;
        $this->inquary->save();
        Alert::success('Your Inquary Massage Successfully','');
        return redirect()->back();
    }
}
