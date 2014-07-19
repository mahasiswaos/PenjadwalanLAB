<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Matkul
 *
 * @author HENDRA
 */
class Matkul extends Eloquent {

    protected $table = 'matkul';
    public $timestamps = false;

    public function jadwal() {
        return $this->hasMany("App\\Models\\Jadwal");
    }
    
    public function mahasiswa() {
        return $this->hasMany("App\\Models\\Mahasiswa");
    }

}
