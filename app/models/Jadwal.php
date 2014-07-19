<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Jadwal
 *
 * @author HENDRA
 */
class Jadwal extends Eloquent {

    //put your code here

    protected $table = 'jadwal';
    public $timestamps = false;

    public function lab() {
        return $this->belongsTo("App\\Models\\Lab");
    }

    public function matkul() {
        return $this->belongsTo("App\\Models\\Matkul");
    }
//    public function mahasiswa() {
//        return $this->hasMany("App\\Models\\Mahasiswa");
//        
//    }

}
