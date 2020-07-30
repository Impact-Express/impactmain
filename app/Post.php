<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = [ 'published_at' ];
    protected $fillable = ['title','slug','excerpt','body','published_at','category_id', 'image', 'author_id', 'tag_id'];
    protected  $primaryKey = 'slug';
    public $incrementing = false;
    public $keyType = 'string';

     /**
     * Sets the Default Key.
     *
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category($value='')
    {
        return $this->belongsTo(Category::class)->withDefault(['slug' => 'uncategorized']);
    }

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ?: NULL;
    }

     /**
     * Gets the Post Image URI to display it on the frontend
     *
     */
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


     /**
     * Gets the Published Date and Returns it in a human readable format
     *
     */
    public function getDateAttribute ($value)
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    
    public function getBodyHtmlAttribute ($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    
    public function getExcerptHtmlAttribute ($value)
    {
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : NULL;
    }


    public function dateFormatted($showTimes = false)
    {
        $format = 'd/m/Y';
        if ($showTimes) $format = $format . ' H:i:s';
        return $this->created_at->format($format);
    }
    
     /**
     * Changes the Publication State Depending on the Publication Date
     *
     */
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

     /**
     * Sorts Posts by latest Post First
     *
     */
    public function scopeLatestFirst ($query)
    {
        return $query->orderBy('created_at','desc');
    }

     /**
     * This Scope Allows sorting by how "popular" or how many views a post has
     *
     */
    public function scopePopular ($query)
    {
        return $query->orderBy('view_count','desc');
    }

     /**
     * Determines when a post is considered "Published"
     *
     */
    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }

     /**
     * Allows for Easy Deletion of an image related to a post.
     *
     */
    public function deleteImage () {
        Storage::delete($this->image);
    }
}
