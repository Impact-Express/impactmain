<?php
return [
    /*
    |--------------------------------------------------------------------------
    | CMS Image Thumbnail?
    |--------------------------------------------------------------------------
    |
    | Specifies the Width and Height Wanted for Image Thumbnails generated
    | by the CMS Side of the Website, these are created on upload of the
    | original file.
    |
    */
    'image' => [
        'directory' => 'storage/',
        'thumbnail' => [
            'width' => 250,
            'height' => 170,
        ]
    ]
];