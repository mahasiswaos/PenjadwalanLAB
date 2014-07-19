@extends ('layout.bootstrap3.index')

@section('content')
<br/>
<br/>
<!--<br/>
<br/>

<a href="<?php echo URL::to('/jadwal/add') ?>" class="btn btn-info">
    <i class="glyphicon glyphicon-folder-open"></i>
    Tambah
</a>
<br/>-->
<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-tasks"></i>
        Form Jadwal Praktikum 
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="warning">
                <th>Id</th>
                <th>Kode Jadwal</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lab</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php foreach ($jad as $jadw) { ?>

                <tr>
                    <td> <?php echo $jadw->id ?> </td>
                    <td> <?php echo $jadw->kd_jadwal ?> </td>
                    <td> <?php echo $jadw->tanggal ?> </td>
                    <td> <?php echo $jadw->waktu ?> </td>
                    <td> <?php echo $jadw->lab->nama_lab; ?> </td>
                    <td> <?php echo $jadw->matkul->nama_mk; ?> </td>
                    <td> 
                        <div class="btn btn-group">
                            <a href="<?php echo URL::to('/jadwal/edit/' . $jadw->id); ?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-edit"></i> 
                                Edit
                            </a>
                            <a href="<?php echo URL::to('/jadwal/delete/' . $jadw->id); ?>" class="btn btn-danger">
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


@stop