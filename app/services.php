<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class services extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'nama','divisi','keluhan'
    ];
     public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
