<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'first','middle','last'
    ];
    
    public function user(){
        return $this->hasOne(User::class);
    }

}
