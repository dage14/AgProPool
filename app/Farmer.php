<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
        'name', 'phone', 'village', 'age' , 'gender', 'imgurl',
    ];

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }
    
}
