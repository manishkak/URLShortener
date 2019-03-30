<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlShort extends Model
{
    protected $table = 'url_shorts';
    protected $primary ='id';

    protected $fillable = [
        'url', 'short'
    ];
}
