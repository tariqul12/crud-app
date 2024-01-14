<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$image,$imageUrl,$directory,$imageName;

    public static function newProduct($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "uplode/product-image/";
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$product          = new Product();
        self::$product->name    = $request->name;
        self::$product->price     = $request->price;
        self::$product->description = $request->description;
        self::$product->image       = self::$imageUrl;
        self::$product->save();
    }
//    private static function

}
