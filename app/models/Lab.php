<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Lap
 *
 * @author HENDRA
 */
class Lab extends Eloquent{
    
    protected $table = 'lab';
    public $timestamps = false;
    public function jadwal() {
       return $this->hasMany("App\\Models\\Jadwal");
   }
   
}
