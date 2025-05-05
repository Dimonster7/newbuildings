<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'price',
        'squaretotal', 
        'squarelive', 
        'GK', 
        'rajon', 
        'street', 
        'numberhouse', 
        'yearhouse', 
        'levelhouse', 
        'level', 
        'countroom', 
        'builder_id', 
        'typehouse', 
        'otdelka', 
        'nalbl', 
        'photo', 
        'date'
    ];

    public function getPhotoAttribute($value){
        return url('storage/'.$value);
    }

    public function builder(){
        return $this->belongsTo(Builder::class);
    }
}
