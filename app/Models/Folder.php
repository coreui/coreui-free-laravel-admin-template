<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Folder extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'folder';
    
    /**
     * Get the comments for the blog post.
     */
    /*
    public function media()
    {
        return $this->hasMany('App\Models\Media');
    }
    */
}
