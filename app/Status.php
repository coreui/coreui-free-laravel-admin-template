<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    
    /**
     * Get the notes for the status.
     */
    public function notes()
    {
        return $this->hasMany('App\Notes');
    }
}
