<?php

namespace App;

use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    protected $primaryKey = 'uuid';

    protected $keyType = 'string';

    public $incrementing = false;
}
