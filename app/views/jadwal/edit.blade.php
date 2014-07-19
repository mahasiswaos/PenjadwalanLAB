@extends ('layout.bootstrap3.index')

@section('content')


</br>
</br>
</br>
<div class="row">
    <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update Data Jadwal</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/jadwal/editProses/'. $ganti->id) ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kode Jadwal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$ganti->kd_jadwal}}"name="kd_jadwal" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" value="{{$ganti->tanggal}}"name="tanggal" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Waktu</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" value="{{$ganti->waktu}}"name="waktu" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Laboratorium</label>
                        <div class="col-sm-6">
                            <select name="lab" class="form-control" >
                                <?php foreach ($nama_lab as $val) { ?>
                                    <option value="<?php echo $val['id']; ?>" 
                                        <?php if ($ganti->lab_id == $val['id']) echo 'selected'; ?>>
                                            <?php echo $val['nama_lab']; ?></option>
                                <?php } ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mata Kulian</label>
                        <div class="col-sm-6">
                            <select name="matkul" class="form-control" >
                                <?php foreach ($nama_mk as $val) { ?>
                                    <option value="<?php echo $val['id']; ?>" 
                                        <?php if ($ganti->matkul_id == $val['id']) echo 'selected'; ?>>
                                            <?php echo $val['nama_mk']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" name="simpan" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-save"></span> 
                                Update
                            </button>   
                            <!--                            <button type="reset" name="reset" class="btn btn-danger">
                                                            <span class="glyphicon glyphicon-upload"></span> 
                                                            Reset
                                                        </button>   -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
