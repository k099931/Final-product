<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubbercomment extends Model
{
        protected $fillable = [
        'comment',
        'updated_at',
        'created_at',
        ];
}
