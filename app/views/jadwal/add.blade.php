@extends ('layout.bootstrap3.index')

@section('content')

</br>
</br>
</br>
<div class="row">
    <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-align-justify"></span>
                    Input Data Jadwal
                </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/jadwal/addProses') ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kode Jadwal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kd_jadwal" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal/waktu</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Waktu</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="waktu" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Laboratorium</label>
                        <div class="col-sm-6">
                            <select name="lab" class="form-control" >
                                <?php foreach ($isi as $val) { ?>
                                    <option value="<?php echo $val['id']; ?>"><?php echo $val['nama_lab']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mata Kulian</label>
                        <div class="col-sm-6">
                            <select name="matkul" class="form-control">
                                <?php foreach ($ismk as $vmk) { ?>
                                    <option value="<?php echo $vmk['id']; ?>"><?php echo $vmk['nama_mk']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
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
                </form>
            </div>
        </div>
    </div>
</div>

@stop