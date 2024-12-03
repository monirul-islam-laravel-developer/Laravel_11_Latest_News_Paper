<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    private static $image,$imageName,$imageExtention,$directory,$imageUrl,$multiLogo,$desctopLogo,$mobileLogo;

    public static function mobileImageUrl($request)
    {
        self::$image =$request->file('mobile_logo');
        self::$imageName = time() . '.' . self::$image->getClientOriginalName();
        self::$directory = 'admin/mobile-logo/image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function favImageUrl($request)
    {
        self::$image =$request->file('fav_icon');
        self::$imageName = time() . '.' . self::$image->getClientOriginalName();
        self::$directory = 'admin/fav-logo/image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function MultiLogo($request)
    {
        self::$multiLogo= new Logo();
        if ($request->mobile_logo)
        {
            self::$multiLogo->mobile_logo=self::mobileImageUrl($request);
        }
        if ($request->desktop_logo)
        {
            self::$multiLogo->desktop_logo=self::favImageUrl($request);
        }

        self::$multiLogo->save();

    }
    public static function updateMultilogo($request,$id)
    {
        self::$multiLogo=Logo::find($id);
        if ($request->file('mobile_logo'))
        {
            if (file_exists(self::$multiLogo->mobile_logo))
            {
                unlink(self::$multiLogo->mobile_logo);
            }
            self::$mobileLogo=self::mobileImageUrl($request);
        }
        else
        {
            self::$mobileLogo=self::$multiLogo->mobile_logo;
        }
        if ($request->file('fav_icon'))
        {
            if (file_exists(self::$multiLogo->fav_icon))
            {
                unlink(self::$multiLogo->fav_icon);
            }
            self::$desctopLogo=self::favImageUrl($request);
        }
        else
        {
            self::$desctopLogo=self::$multiLogo->desktop_logo;
        }
        self::$multiLogo->mobile_logo=self::$mobileLogo;
        self::$multiLogo->fav_icon=self::$desctopLogo;
        self::$multiLogo->save();
    }
}