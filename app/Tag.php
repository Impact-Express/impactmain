<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title', 'slug'];
    protected  $primaryKey = 'slug';
    public $incrementing = false;
    public $keyType = 'string';

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
