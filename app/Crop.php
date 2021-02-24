<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
        'name', 'imgurl',
    ];

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }
}

