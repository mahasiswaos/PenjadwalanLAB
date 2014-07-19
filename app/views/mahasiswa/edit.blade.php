@extends ('layout.bootstrap3.index')

@section('content')

</br>
</br>
</br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-th"></span>
                    Update Mahasiswa
                </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/mhs/editProses/' . $ganti->id); ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nim</label>
                        <div class="col-sm-4">
                            <input type="text" value="{{ $ganti->nim;}}" class="form-control" name="nim" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Mahasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" value="{{ $ganti->nama_mhs;}}" class="form-control" name="nama_mhs" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" value="{{ $ganti->tgl_lahir;}}" class="form-control" name="tgl_lahir" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-6">
                            <select name="jk" class="form-control" >
                                <?php $b = $ganti->jk; ?> 
                                <option value="L" <?php if ($b == 'L') echo 'selected'; ?> >laki-laki</option>
                                <option value="P" <?php if ($b == 'P') echo 'selected'; ?> >Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-5">
                            <textarea name="alamat" class="form-control" >{{ $ganti->alamat}}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jurusan</label>
                        <div class="col-sm-5">
                            <input type="text" value="{{ $ganti->jurusan;}}" class="form-control" name="jurusan" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Angkatan</label>
                        <div class="col-sm-3">
                            <input type="text" value="{{ $ganti->angkatan;}}" class="form-control" name="angkatan" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <div class="btn btn-group">
                            <button type="submit" name="simpan" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-saved"></span> 
                                Update
                            </button>   
<!--                            <button type="reset" name="reset" class="btn btn-danger">
                                 <a href="<?php echo URL::to('/mhs');?>">
                                <span class="glyphicon glyphicon-floppy-remove"></span> 
                                Batal
                                 </a>
                            </button>   -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@stop