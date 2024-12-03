<?php

namespace App\Http\Controllers;

use App\Models\Cupon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CuponController extends Controller
{
    private $cupons;
    private $cupon;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->cupons=Cupon::orderBy('id','desc')->get();
        return view('admin.cupon.index',['cupons'=>$this->cupons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->cupon= new Cupon();
        $this->cupon->name=$request->name;
        $this->cupon->code=$request->code;
        $this->cupon->discount_price=$request->discount_price;
        $this->cupon->start_date=$request->start_date;
        $this->cupon->end_date=$request->end_date;
        $this->cupon->expire_date=$request->expire_date;
        $this->cupon->save();
        Alert::success('Cupon Store Successfully');
        return redirect('/cupon');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->cupon=Cupon::find($id);
        if ($this->cupon->status==1)
        {
            $this->cupon->status=0;
        }
        else
        {
            $this->cupon->status=1;
        }
        $this->cupon->save();
        Alert::success('Cupon Status Upgrated','.');
        return redirect('/cupon');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->cupon=Cupon::find($id);
        return view('admin.cupon.edit',['cupon'=>$this->cupon]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->cupon=Cupon::find($id);
        $this->cupon->name=$request->name;
        $this->cupon->code=$request->code;
        $this->cupon->discount_price=$request->discount_price;
        $this->cupon->start_date=$request->start_date;
        $this->cupon->end_date=$request->end_date;
        $this->cupon->expire_date=$request->expire_date;
        $this->cupon->save();
        Alert::success('Cupon Update Successfully');
        return redirect('/cupon');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->cupon=Cupon::find($id);
        $this->cupon->delete();
        Alert::success('Cupon Delete Successfully');
        return redirect('/cupon');
    }
}
