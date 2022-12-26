<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','status','price','iamge','content','category_id'];

    protected $hidden  = ['created_at','updated_at'];

    public function cat()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
