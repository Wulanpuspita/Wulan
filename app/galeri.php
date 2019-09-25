<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'galeri';
}
