<?php

namespace App\Models;


use App\Models\Brand;
use App\Models\Categori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    public $table = "sub_categories";
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo(Categori::class,'category_id');
    }
    public function brands()
    {
        return $this->hasMany(Brand::class,'sub_category_id');
    }

}
