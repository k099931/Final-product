<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rucket extends Model
{
       public function orderByMaker()
   {
      return $this->orderBy('maker', 'DESC')->get();
   }
}
