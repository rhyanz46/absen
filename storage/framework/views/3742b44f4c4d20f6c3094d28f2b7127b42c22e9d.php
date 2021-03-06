<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo e(url('/admin/base')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Admin Panel <strong><?php echo e(Auth::user()->name); ?></strong></div>
                <div class="panel-body">
                    <ul class="list-group">
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Daftar Karyawan Baru</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('admin.regkaryawan')); ?>">Data Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('admin.postnews')); ?>">Tulis Pengumuman</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Riwayat Gaji Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Setting Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Atur Waktu Libur</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Slip Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-flat btn-primary btn-sm" name="btnOut" value="b" > KELUAR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('konten'); ?>
        </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
