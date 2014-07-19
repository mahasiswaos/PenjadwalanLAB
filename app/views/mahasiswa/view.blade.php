@extends ('layout.bootstrap3.index')

@section('content')
<br/>
<br/>
<!--<br/>
<br/>
<a href="<?php echo URL::to('/mhs/add') ?>" class="btn btn-info">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah
</a>
<br/>-->
<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-tasks"></i>
        Form Mahasiswa
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="warning">
                <th>Id</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tenggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php foreach ($mhs as $sis) { ?>
                <tr>
                    <td> <?php echo $sis->id ?> </td>
                    <td> <?php echo $sis->nim ?> </td>
                    <td> <?php echo $sis->nama_mhs ?> </td>
                    <td> <?php echo $sis->tgl_lahir ?> </td>
                    <td> <?php echo $sis->jk ?> </td>
                    <td> <?php echo $sis->alamat ?> </td>
                    <td> <?php echo $sis->jurusan ?> </td>
                    <td> <?php echo $sis->angkatan ?> </td>                    
                    <td> 
                        <div class="btn btn-group">
                            <a href="<?php echo URL::to('/mhs/edit/' . $sis->id); ?>" class="btn btn-info">
                                <span class="glyphicon glyphicon-edit"></span> 
                                Edit
                            </a>
                            <a href="<?php echo URL::to('/mhs/delete/' . $sis->id); ?>" class="btn btn-danger">
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
        <?php echo $mhs->links(); ?> 
    </div>
</div>

@stop

