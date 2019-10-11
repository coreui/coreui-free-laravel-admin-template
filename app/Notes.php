<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    /**
     * Get the User that owns the Notes.
     */
    public function users()
    {
        return $this->belongsTo('App\Users');
    }
}
