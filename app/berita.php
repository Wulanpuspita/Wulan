<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = ['nama', 'users_id', 'kategori_berita_id'];
    protected $table = 'berita';
}
