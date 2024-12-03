<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    private static $order;

    public static function newOrder($request)
    {
        self::$order=new Order();
        self::$order->customer_id=
        self::$order->number=
        self::$order->alt_number=
        self::$order->order_total=
        self::$order->regular_price=
        self::$order->selling_price=
        self::$order->discount_price=
        self::$order->coupon_discount=
        self::$order->coupon_code=
        self::$order->transaction_id=
        self::$order->transaction_image=
        self::$order->website_name=
        self::$order->old_website=
        self::$order->order_date=
        self::$order->order_timestamp=
        self::$order->payment_status=
        self::$order->payment_method=
        self::$order->payment_amount=
    }
}
