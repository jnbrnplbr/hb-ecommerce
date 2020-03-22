<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'amount'
    ];

    public function watch(){
        return $this-hasMany(Watch::class);
    }
}
