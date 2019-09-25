<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $fillable = ['nama', 'users_id'];
    protected $table = 'pengumuman';
}
