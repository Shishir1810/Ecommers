<?php

namespace App\Models;


use App\Models\Tag;
use App\Models\Size;
use App\Models\Color;
use App\Models\Categori;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;
    public function category(){
        return $this->belongsTo(Categori::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
    public function brand(){
        return $this->belongsTo(brand::class);
    }
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }

    public static function category_product_count($cate_id){
        $catcount=Product::where('category_id',$cate_id)->count();
        return $catcount;
    }

    public static function subcategory_product_count($subcate_id){
        $subcatcount=Product::where('sub_category_id',$subcate_id)->count();
        return $subcatcount;
    }
    public static function brand_product_count($brand_id){
        $brandcount=Product::where('brand_id',$brand_id)->count();
        return $brandcount;
    }
}
