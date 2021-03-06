<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary">
                <div class="panel-heading">Admin Panel</div>
                <div class="panel-body">
                    <ul class="list-group">
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Daftar Karyawan Baru</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Data Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Tulis Pengumuman</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Riwayat Gaji Karyawan</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Setting Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Atur Waktu Libur</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('register')); ?>">Slip Gaji</a></li>
                    <li class="list-group-item list-group-item-primary"><a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-flat btn-primary btn-sm" name="btnOut" value="b" > KELUAR</a></li>
                    </ul>
                </div>

			</div>
		</div>
		<div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Karyawan</div>

                <div class="panel-body">
			<form class="container" id="needs-validation" novalidate>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom01">First name</label>
			      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom02">Last name</label>
			      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom03">City</label>
			      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom04">State</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
			    <div class="col-md-2 mb-3">
			      <label for="validationCustom05">Zip</label>
			      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
			      <div class="invalid-feedback">
			        Please provide a valid zip.
			      </div>
			    </div>
			  </div>
			  <button class="btn btn-primary" type="submit">Submit form</button>
			</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("needs-validation");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>
                </div>

            </div>
        </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>