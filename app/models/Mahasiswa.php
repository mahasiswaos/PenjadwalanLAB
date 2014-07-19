<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Mahasiswa
 *
 * @author HENDRA
 */
class Mahasiswa extends Eloquent {

    protected $table = 'mahasiswa';
    public $timestamps = false;

     public function mahasiswa() {
     return $this->hasMany("App\\Models\\Matkul");
    }
    
    public function jadwal() {
        return $this->hasMany("App\\Model\\jadwal");
        
    }
}
