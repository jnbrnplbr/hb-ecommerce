<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'detail'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
