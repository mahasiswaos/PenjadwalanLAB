@extends('layout.bootstrap3.index')

@section('content')
<br/>
<br/>
<!--<br/>
<br/>

<div class="col-md-6 col-md-offset-2 ">
    <a href="<?php echo URL::to('/lab/add') ?>" class="btn btn-info">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah
</a>
<br/>-->
<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-tasks"></i>
        Form Laboratorium
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="warning">
                <th>Id</th>
                <th>Kode Lab</th>
                <th>Nama Lab</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php foreach ($lab as $fal) { ?>
                <tr>
                    <td> <?php echo $fal->id ?> </td>
                    <td> <?php echo $fal->kd_lab ?> </td>
                    <td> <?php echo $fal->nama_lab ?> </td>                   
                    <td> 
                        <div class="btn btn-group">
                            <a href="<?php echo URL::to('/lab/edit/' . $fal->id); ?>" class="btn btn-info">
                                <span class="glyphicon glyphicon-edit"></span> 
                                Edit
                            </a>
                            <a href="<?php echo URL::to('/lab/delete/' . $fal->id); ?>" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="panel-footer" >
        <?php echo $lab->links(); ?> 
    </div>
</div>
</div>
@stop

