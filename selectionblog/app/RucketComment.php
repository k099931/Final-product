<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RucketComment extends Model
{
        use SoftDeletes;
        
        protected $table = 'rucketcomments';
        
        protected $fillable = [
        'comment',
        'rucket_id',
        ];
        
        public function orderById()
        {
            return $this->orderBy('rucket_id', 'DESC')->get();
        }
}
