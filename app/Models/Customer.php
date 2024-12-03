<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $image,$imageName,$directory,$imageUrl,$customer;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$imageName =self::$image->getClientOriginalName();
        self::$directory = 'front/customer/image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function storeCustomer($request)
    {
        self::$customer=new Customer();
        self::$customer->name=$request->name;
        self::$customer->slug=Str::slug($request->name);
        self::$customer->email=$request->email;
        self::$customer->number=$request->number;
        self::$customer->alt_number=$request->alt_number;
        self::$customer->password=bcrypt($request->password);
        self::$customer->nid=$request->nid;
        self::$customer->date_of_birth=$request->date_of_birth;
        self::$customer->gender=$request->gender;
        self::$customer->address=$request->address;
        if ($request->file('image'))
        {
            self::$customer->image=self::getImageUrl($request);
        }
        self::$customer->save();

        session()->put('custommer_id', self::$customer->id);
        session()->put('custommer_name', self::$customer->name);
    }
    public static function customerUpdate($request)
    {
        self::$customer = Customer::find(Session::get('custommer_id'));
        self::$customer->name = $request->name;
        self::$customer->slug = Str::slug($request->name);
        self::$customer->email = $request->email;
        self::$customer->number = $request->number;
        self::$customer->alt_number = $request->alt_number;
        self::$customer->nid = $request->nid;
        self::$customer->date_of_birth = $request->date_of_birth;
        self::$customer->gender = $request->gender;
        self::$customer->address = $request->address;
        if ($request->file('image'))
        {
            if (file_exists(self::$customer->image))
            {
                unlink( self::$customer->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl= self::$customer->image;
        }

        self::$customer->image=self::$imageUrl;

        self::$customer->save();
    }


}
