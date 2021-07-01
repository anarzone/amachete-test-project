<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function productAd(){
        return $this->belongsTo(ProductAd::class,'product_ad_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function campaign(){
        return $this->belongsTo(User::class,'user_id');
    }
}
