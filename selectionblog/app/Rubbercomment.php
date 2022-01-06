<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubbercomment extends Model
{
        protected $fillable = [
        'comment',
        'rubber_id',
        ];
        
        public function orderById()
        {
                return $this->orderBy('rubber_id', 'DESC')->get();
        }
}
?>