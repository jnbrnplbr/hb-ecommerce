<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    protected $fillable = [
        'detail_id','price_id', 'quantity_id','brand_id','specification_id','image_id'
    ];

    public function detail(){
        return $this->belongsto(Detail::class);
    }
    
    public function price(){
        return $this->belongsTo(Price::class);
    }

    public function quantity(){
        return $this->belongsTo(Quantity::class);
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function specification()
    {
        return $this->belongsTo(Specification::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
