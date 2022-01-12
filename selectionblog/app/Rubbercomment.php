<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rubbercomment extends Model
{
        use SoftDeletes;
        
        protected $fillable = [
        'comment',
        'rubber_id',
        'user_id'
        ];
        
        public function orderById()
        {
                return $this->orderBy('rubber_id', 'DESC')->get();
        }
        
        public function user()
        {
                return $this->belongsTo('App\User');
        }
}
?>