<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table = 'notes';

    /**
     * Get the User that owns the Notes.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id')->withTrashed();
    }

    /**
     * Get the Status that owns the Notes.
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
