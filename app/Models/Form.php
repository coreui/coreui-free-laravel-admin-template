<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    /**
     * Get the model that owns the Form.
     */
    public function model()
    {
        return $this->belongsTo('App\Models\Models', 'model_id');
    }
}
