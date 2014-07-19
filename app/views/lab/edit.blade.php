@extends ('layout.bootstrap3.index')

@section('content')

</br>
</br>
</br>
<div class="row">
    <div class="col-md-6 col-md-offset-2 ">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-align-justify"></span>
                    Update Data Laboratorium
                </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/lab/editProses/'.$ganti->id) ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kode Lab</label>
                        <div class="col-sm-4">
                            <input type="text" value="{{ $ganti->kd_lab;}}" class="form-control" name="kd_lab" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Lab</label>
                        <div class="col-sm-6">
                            <input type="text" value="{{ $ganti->nama_lab;}}" class="form-control" name="nama_lab" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <div class="btn btn-group">
                                <button type="submit" name="simpan" class="btn btn-success">
                                    <span class="glyphicon glyphicon-floppy-save"></span> 
                                    Update
                                </button>   
<!--                                <button name="reset" class="btn btn-danger">
                                    <a href="<?php echo URL::to('/lab') ?>" >
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

