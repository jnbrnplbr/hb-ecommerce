<?php

namespace App;
use App\Watch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Illuminate\Http\UploadedFile;

class Image extends Model
{
    protected $fillable = [
        'img'
    ];




    public function getImageAttribute()
    {
        return $this->img;
    }
 
    public function watch()
    {
        return $this->hasOne(Watch::class);
    }



    // public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    // {
    //     $name = !is_null($filename) ? $filename : Str::random(25);

    //     $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

    //     return $file;
    // }


}
