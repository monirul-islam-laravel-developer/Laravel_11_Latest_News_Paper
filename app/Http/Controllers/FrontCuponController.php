<?php

namespace App\Http\Controllers;

use App\Models\Cupon;
use Illuminate\Http\Request;

class FrontCuponController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $cupon = Cupon::where('code', $request->code)
            ->where('status', 1) // Ensure coupon is active
            ->whereDate('expire_date', '>=', now()) // Ensure it's not expired
            ->first();

        if ($cupon) {
            $discount = $cupon->discount_price;
            return redirect()->back()->with(['success' => "Coupon applied! Discount: Tk. $discount", 'cupondiscount_price' => $discount]);
        } else {
            return redirect()->back()->with('error', 'Invalid or expired coupon code.');
        }

    }
}
