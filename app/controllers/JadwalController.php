<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;
use App\Models\Matkul;
use App\Models\Lab;
use View;
use Redirect;
use Input;

/**
 * Description of JadwalController
 *
 * @author HENDRA
 */
class JadwalController extends BaseController {

    public function home() {
        return View::make('jadwal.home');
    }

    public function view() {
        $j = Jadwal::all();
        $data = array(
            'jad' => $j,
        );
        return View::make('jadwal.view', $data);
    }

    public function add() {
        $mk = Matkul::all();
        $dt = array(
            'ismk' => $mk,
        );


        $data = Lab::all();
        $a = array(
            'isi' => $data,
        );
        return View::make('jadwal.add', $a, $dt);
    }

    public function addProses() {
        $input = Input::all();
        $t = new Jadwal;
        $t->kd_jadwal = $input['kd_jadwal'];
        $t->tanggal = $input['tanggal'];
        $t->waktu = $input['waktu'];
        $t->lab_id = $input['lab'];
        $t->matkul_id = $input['matkul'];
        $t->save();
        return Redirect::to('/jadwal');
    }

    public function edit($id) {
        $edlab = Lab::all();
        $edmk = Matkul::all();
        $edit = Jadwal::find($id);
        $ubah = [
            'ganti' => $edit,
            'nama_lab' => $edlab,
            'nama_mk' => $edmk,
        ];
        return View::make('jadwal.edit', $ubah);
    }

    public function editProses($id) {
        $input = Input::all();
        $i = Jadwal::find($id);
        $i->kd_jadwal = $input['kd_jadwal'];
        $i->tanggal = $input ['tanggal'];
        $i->waktu = $input ['waktu'];
        $i->lab_id = $input['lab'];
        $i->matkul_id = $input['matkul'];
        $i->save();
        return Redirect::to('/jadwal');
    }

    public function delete($id) {
        $hapus = Jadwal::find($id);
        $hapus->delete();
        return Redirect::to('/jadwal');
    }

}
