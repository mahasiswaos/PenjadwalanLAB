<!--<nav class="navbar navbar-default" role="navigation">-->
<nav class="navbar navbar-inverse" role="navigation">


    <!--Brand and toggle get grouped for better mobile display--> 
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL::to('/'); ?>"><i class="glyphicon glyphicon-home"></i> Penjadwal Pratikum</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Mahasiswa <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/mhs/add'); ?>" ><i class="glyphicon glyphicon-plus"></i> Add Mahasiswa</a></li>
                    <li class="divider"></li>
                    <li ><a href="<?php echo URL::to('/mhs'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-indent-left"></i> Mata Kuliah <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/mk/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Mata Kuliah</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/mk'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Laboratorium <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/lab/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Lab</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/lab'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-align-justify"></i> Jadwal <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/jadwal/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Add Jadwal</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/jadwal'); ?>"><i class="glyphicon glyphicon-list-alt"></i> View Table</a></li>
                </ul>
            </li>
        </ul>
<!--        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i> 
                    <?php
                    if (Auth::check()) {
                        $user = Auth::user();
                        echo $user->username;
                    }
                    ?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/home'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>-->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            </li>
        </ul>
    </div>
    <!--/.navbar-collapse--> 
</nav>