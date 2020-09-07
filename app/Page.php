<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Page extends Model
{
    protected $dates = [ 'published_at' ];
    protected $fillable = ['title','slug','body','published_at', 'image', 'author_id'];
    
    public function author ()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute ($value)
    {
        $imageUrl = "";
        if (! is_null($this->image)) 
        {
            $directory = config('cms.image.directory');
            $imageUrl ="/{$directory}/" . Post::select('image')->where('id', $this->id)->pluck('image')[0];
        }
        // dd($imageUrl);
        return $imageUrl;
    }
    
    public function getDateAttribute ($value)
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function getBodyHtmlAttribute ($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    public function dateFormatted($showTimes = false)
    {
        $format = 'd/m/Y';
        if ($showTimes) $format = $format . ' H:i:s';
        return $this->created_at->format($format);
    }
    public function publicationLabel()
    {
        if ( ! $this->published_at ) {
            return '<span class="label label-warning">Draft</span>';
        } elseif ($this->published_at && $this->published_at->isFuture()) {
            return '<span class="label label-info">Scheduled</span>';
        } else {
            return '<span class="label label-success">Published</span>';
        }
    }
}
