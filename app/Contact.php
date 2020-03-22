<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'detail'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
