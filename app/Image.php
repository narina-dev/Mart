<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
