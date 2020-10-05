<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MediaBrowser extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'filename',
        'file_path'
    ];

    public function getNameUrlAttribute ($value)
    {
        $nameUrl = "";
        if (! is_null($this->name)) 
        {
            $directory = public_path('upload');
            $nameUrl ="{$directory}/" . MediaBrowser::select('name')->where('id', $this->id)->pluck('name')[0];
        }
        // dd($nameUrl);
        return $nameUrl;
    }
}
