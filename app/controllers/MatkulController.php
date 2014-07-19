<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Matkul;
use View;
use Input;
use Redirect;

/**
 * Description of MatkulController
 *
 * @author HENDRA
 */
class MatkulController extends BaseController {

    public function view() {
        $tab = Matkul::paginate(3); // mencari data pada tabel test dengan id nomer
        $data = array(
            'mk' => $tab,
        );

        return View::make('matkul.view', $data);
    }

    public function add() {
        return View::make('matkul.add');
    }
    

    public function addProses() {
        $input = Input::all();
        $mat = new Matkul();
        $mat->kd_mk = $input ['kd_mk'];
        $mat->nama_mk = $input ['nama_mk'];
        $mat->sks = $input ['sks'];
        $mat->save();
        return Redirect::to('/mk');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function edit($fam) {
        $edit = Matkul::find($fam);
        $ubah = 
        [
            'ganti' => $edit,
        ];
        return View::make('matkul.edit', $ubah);
    }

    public function editProses($id) {
       $data = Input::all();
       $ed = Matkul::find($id);
       $ed -> kd_mk = $data['kd_mk'];
       $ed -> nama_mk = $data['nama_mk'];
       $ed -> sks = $data['sks'];
       $ed->save();
       
       return Redirect::to('/mk');
    }

    public function delete($id) {
        $hapus = Matkul::find($id);
        $hapus->delete();
        return Redirect::to('/mk');
    }

}
