<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    protected $fillable = [
        'quantity'
    ];

    public function watch(){
        return $this->hasMany(Watch::class);
    }
}
