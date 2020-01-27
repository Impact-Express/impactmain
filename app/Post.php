<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if (! is_null($this->image)) 
        {
            $imagepath = public_path() . '/img/' . $this->image;
            if (file_exists($imagepath)) $imageUrl = asset("img/" . $this->image);
        }
        return $imageUrl;
    }
}
