<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'farmer_id', 'Crop_id', 'Quantity', 'created_at'
    ];

    public function farmer(){
        return $this->belongsTo('App\Farmer','farmer_id');
    }

    public function crop(){
        return $this->belongsTo('App\Crop','Crop_id');
    }
 
}

