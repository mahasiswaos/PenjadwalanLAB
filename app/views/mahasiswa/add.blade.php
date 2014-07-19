@extends ('layout.bootstrap3.index')

@section('content')

</br>
</br>
</br>
<div class="row">
    <div class="col-md-8 col-md-offset-2 ">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-align-justify"></span>
                    Input Data Mahasiswa
                </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/mhs/addProses') ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nim</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nim" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Mahasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_mhs" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-6">
                            <select name="jk" class="form-control" >
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jurusan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="jurusan" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="angkatan" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <div class="btn btn-group">
                            <button type="submit" name="simpan" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-saved"></span> 
                                Simpan
                            </button>   
                            <button type="reset" name="reset" class="btn btn-danger">
                                <span class="glyphicon glyphicon-floppy-remove"></span> 
                                Reset
                            </button>   
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@stop