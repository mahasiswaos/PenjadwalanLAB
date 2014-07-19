<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Lab;
use View;
use Input;
use Redirect;

/**
 * Description of LabController
 *
 * @author HENDRA
 */
class LabController extends BaseController {

    public function view() {
        $tampil = Lab::paginate(3);
        $lihat = array(
            'lab' => $tampil,
        );
        return View::make('lab.view', $lihat);
    }

    public function add() {
        return View::make('lab.add');
    }

    public function addProses() {
        $input = Input::all();
        $la = new Lab();
        $la->kd_lab = $input ['kd_lab'];
        $la->nama_lab = $input ['nama_lab'];
        $la->save();
        return Redirect::to('/lab');
    }

    public function edit($id) {
        $ubah = Lab::find($id);
        $edit = array(
            'ganti' => $ubah,
        );
        return View::make('lab.edit', $edit);
    }

    public function editProses($id) {
       $ubah =Input::all();
       $la = Lab::find($id);
       $la -> kd_lab = $ubah ['kd_lab'];
       $la -> nama_lab = $ubah ['nama_lab'];
       $la ->save();
       return Redirect::to('/lab'); 
    }

    public function delete($id) {
      $hapus = Lab::find($id);
      $hapus->delete();
      return Redirect::to('/lab');
    }

}
