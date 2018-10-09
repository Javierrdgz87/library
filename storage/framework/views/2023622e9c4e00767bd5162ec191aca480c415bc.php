<?php $__env->startSection('title', 'Dashboard | Agregar Categorias'); ?>

<?php $__env->startSection('content'); ?>

	
	 <?php echo $__env->make('layout.parts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="<?php echo e(route('categorias.index')); ?>">Categorias</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Agregar Categoria</li>
				  </ol>
				</nav>
			</div>
		</div>
		<form method="POST" action="<?php echo e(route('categorias.store')); ?>">
			<?php echo csrf_field(); ?>

		  	<div class="panel panel-default">
				<div class="panel-heading">
			    	<button type="submit" class="btn btn-default btn-outline-dark btn-sm shadow" id="btnGU1"><i class="fa fa-save position-left"></i> Guardar</button>
			    	<button type="button" class="btn btn-default btn-outline-dark btn-sm shadow" id="btnCO2" onclick="location.href='<?php echo e(route("categorias.index")); ?>'"><i class="fa fa-list-ul position-left"></i> Consulta</button>
				</div>
		    	<div class="panel-body">

					<?php if($errors->any()): ?>
					  <div class="alert alert-danger">
					      <ul>
					          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					              <li><?php echo e($error); ?></li>
					          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					      </ul>
					  </div><br />
					<?php endif; ?>
			     	<div class="row">
				      	<div class="col-md-4">
				      		<div class="form-group">
							    <label for="tNombre">Nombre</label>
							    <input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre" value="<?php echo e(old('tNombre')); ?>">
							</div>
		      			</div>
		      		</div>
		    	</div>
		    	<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</form>
	</div>
	<!-- /.container -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script>
		$(document).ready(function(){
			if($( ".alert-danger" ))
				setTimeout(function(){
					$( ".alert-danger" ).hide( "slow");
				}, 6000);
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>