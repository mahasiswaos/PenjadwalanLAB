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
                    Input Data Mata Kuliah
                </h3>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo URL::to('/mk/addProses') ?>" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Kode Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kd_mk" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Nama Mata Kuliah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_mk" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">S K S</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sks" required="">
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