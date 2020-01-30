<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getImageUrlAttribute ($value)
    {
        $imageUrl = "";

        if (! is_null($this->image)) 
        {
            $imagepath = public_path() . '/img/' . $this->image;
            if (file_exists($imagepath)) $imageUrl = asset("img/" . $this->image);
        }
        return $imageUrl;
    }
    
    public function getDateAttribute ($value)
    {
        return $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst ($query)
    {
        return $query->orderBy('created_at','desc');
    }

    public function author ()
    {
        return $this->belongsTo(User::class);
    }
}
