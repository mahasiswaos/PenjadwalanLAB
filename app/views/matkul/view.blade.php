@extends ('layout.bootstrap3.index')

@section('content')
<br/>
<br/>

<!--<a href="<?php echo URL::to('/mk/add') ?>" class="btn btn-info">
    <i class="glyphicon glyphicon-folder-open"></i>
    Tambah
</a>-->

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-tasks"></i>
        Form Mata Kuliah
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="warning">
                <th>Id</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php foreach ($mk as $mat) { ?>
                <tr>
                    <td> <?php echo $mat->id ?> </td>
                    <td> <?php echo $mat->kd_mk ?> </td>
                    <td> <?php echo $mat->nama_mk ?> </td>
                    <td> <?php echo $mat->sks ?> </td>
                    <td> 
                        <div class="btn btn-group">
                            <a href="<?php echo URL::to('/mk/edit/' . $mat->id); ?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-edit"></i> 
                                Edit
                            </a>
                            <a href="<?php echo URL::to('/mk/delete/' . $mat->id); ?>" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="panel-footer">
    </div>
</div>
<?php echo $mk->links(); ?> 

@stop