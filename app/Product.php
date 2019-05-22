<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function images()
    {
        // return $this->hasMany(Image::class,'id','product_id');
        return $this->hasMany(Image::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
   
}
