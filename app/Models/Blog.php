<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = [
        'title', 'thumbnail', 'description','img_index','author','minutes_read'
    ];
}
