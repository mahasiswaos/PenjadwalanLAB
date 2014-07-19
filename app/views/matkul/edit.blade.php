@extends ('layout.bootstrap3.index')

@section('content')


</br>
</br>
</br>
<div class="row">
    <div class="col-md-6 col-md-offset-3 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Update Data Mata Kuliah</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/mk/editProses/' . $ganti->id) ?>" class="form-horizontal" role="form">
<!--                    <input type="hidden" name="id" value="{{ $ganti->id }}"/>-->
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kode Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $ganti->kd_mk; ?>" name="kd_mk" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $ganti->nama_mk; ?>" name="nama_mk" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">S K S</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $ganti->sks; ?>" name="sks" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <div class="btn btn-group">
                                <button type="submit" name="simpan" class="btn btn-success">
                                    <span class="glyphicon glyphicon-floppy-remove"></span> 
                                    Update
                                </button>   
<!--                                <button type="reset" name="reset" class="btn btn-danger">
                                    <a href="<?php echo URL::to('/mk') ?>" >
                                        <span class="glyphicon glyphicon-floppy-remove"></span> 
                                        Batal
                                    </a>
                                </button>  -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop