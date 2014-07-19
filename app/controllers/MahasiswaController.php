<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use View;
use Input;
use Redirect;
use Session;

/**
 * Description of MahasiswaController
 *
 * @author HENDRA
 */
class MahasiswaController extends BaseController {

    public function view() {
        $tampil = Mahasiswa::paginate(3);
        $t = array(
            'mhs' => $tampil,
        );
        return View::make('mahasiswa.view', $t);
    }

    public function add() {
        return View::make('mahasiswa.add');
    }

    public function addProses() {
        $input = Input::all();
        $maha = New Mahasiswa();
        $maha->nim = $input['nim'];
        $maha->nama_mhs = $input['nama_mhs'];
        $maha->tgl_lahir = $input['tgl_lahir'];
        $maha->jk = $input['jk'];
        $maha->alamat = $input['alamat'];
        $maha->jurusan = $input['jurusan'];
        $maha->angkatan = $input['angkatan'];
        $maha->save();
        Session::flash('message', 'Successfully created band!');
        return Redirect::to('/mhs');
//        echo '<pre>';
//        print_r($maha);
//        echo '</pre>';
    }

    public function edit($id) {
        $edit = Mahasiswa::find($id);
//        $a = Mahasiswa::all();
        $ubah = array(
            'ganti' => $edit,
        );
        return View::make('mahasiswa.edit', $ubah);
    }

    public function editProses($id) {
        $edit = Input::all();
        $ubah = Mahasiswa::find($id);
        $ubah->nim = $edit['nim'];
        $ubah->nama_mhs = $edit['nama_mhs'];
        $ubah->tgl_lahir = $edit['tgl_lahir'];
        $ubah->jk = $edit['jk'];
        $ubah->alamat = $edit['alamat'];
        $ubah->jurusan = $edit['jurusan'];
        $ubah->angkatan = $edit['angkatan'];
        $ubah->save();
        return Redirect::to('/mhs');
    }

    public function delete($id) {
        $delete = Mahasiswa::find($id);
        $delete->delete();
        return Redirect::to('/mhs');
    }

}
