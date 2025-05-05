<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    public function advertisements(){
        return $this->hasMany(Advertisement::class, 'builder');
    }
}
