<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Theme extends Model
{
    use HasFactory;
    private static $image,$imageName,$imageExtention,$directory,$imageUrl,$theme;

    public static function getImageUrl($request)
    {
        self::$image =$request->file('image');
        self::$imageName = time() . '.' . self::$image->getClientOriginalName();
        self::$directory = 'admin/theme/image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function storeTheme($request)
    {
        self::$theme= new Theme();
        self::$theme->name=$request->name;
        $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        self::$theme->slug=$s.'-'.Str::slug($request->name);
        self::$theme->category_id=$request->category_id;
        self::$theme->sub_category_id=$request->sub_category_id;
        self::$theme->link=$request->link;
        self::$theme->regular_price=$request->regular_price;
        self::$theme->selling_price=$request->selling_price;
        self::$theme->browser=$request->browser;
        self::$theme->software_version=$request->software_version;
        self::$theme->support=$request->support;
        self::$theme->detail=$request->detail;
        self::$theme->more_detail=$request->more_detail;
        self::$theme->seo_tag=$request->input('seo_tag');

        if ($request->file('image'))
        {
            self::$theme->image=self::getImageUrl($request);
        }
        self::$theme->save();
    }
    public static function updateTheme($request,$id)
    {
        self::$theme=Theme::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$theme->image))
            {
                unlink(self::$theme->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl=self::$theme->image;
        }
        self::$theme->name=$request->name;
        $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        self::$theme->slug=$s.'-'.Str::slug($request->name);
        self::$theme->category_id=$request->category_id;
        self::$theme->sub_category_id=$request->sub_category_id;
        self::$theme->link=$request->link;
        self::$theme->regular_price=$request->regular_price;
        self::$theme->selling_price=$request->selling_price;
        self::$theme->browser=$request->browser;
        self::$theme->software_version=$request->software_version;
        self::$theme->support=$request->support;
        self::$theme->detail=$request->detail;
        self::$theme->more_detail=$request->more_detail;
        self::$theme->seo_tag=$request->input('seo_tag');
        self::$theme->image=self::$imageUrl;
        self::$theme->save();

    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
