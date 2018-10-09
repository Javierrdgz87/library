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
				    <li class="breadcrumb-item"><a href="<?php echo e(route('libros.index')); ?>">Libros</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Agregar Libro</li>
				  </ol>
				</nav>
			</div>
		</div>
		<form method="POST" action="<?php echo e(route('libros.update', $aDatos->eCodLibro)); ?>">
			<?php echo method_field('PUT'); ?>

			<?php echo csrf_field(); ?>

		  	<div class="panel panel-default">
				<div class="panel-heading">
			    	<button type="submit" class="btn btn-default btn-outline-dark btn-sm shadow" id="btnGU1"><i class="fa fa-save position-left"></i> Guardar</button>
			    	<button type="button" class="btn btn-default btn-outline-dark btn-sm shadow" id="btnCO2" onclick="location.href='<?php echo e(route("libros.index")); ?>'"><i class="fa fa-list-ul position-left"></i> Consulta</button>
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
							    <input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre" value="<?php echo e($aDatos->tNombre); ?>">
							</div>
		      			</div>
				      	<div class="col-md-4">
				      		<div class="form-group">
							    <label for="tAutor">Autor</label>
							    <input type="text" class="form-control" id="tAutor" name="tAutor" placeholder="Autor" value="<?php echo e($aDatos->tAutor); ?>">
							</div>
		      			</div>
				      	<div class="col-md-4">
				      		<div class="form-group">
							    <label for="eCodCategoria">Categoria</label>
							    <input type="text" class="form-control" id="eCodCategoria" name="eCodCategoria" placeholder="Categoria" value="<?php echo e($aDatos->Categoria); ?>" onkeypress="obj.autoCategoria()">
							    <input type="hidden" id="CodCategoria" name="CodCategoria" value="<?php echo e($aDatos->eCodCategoria); ?>">
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
	<script src="<?php echo e(asset('js/typeahead/bootstrap-typeahead.js')); ?>"></script>
	<script>
		$(document).ready(function(){
			if($( ".alert-danger" ))
				setTimeout(function(){
					$( ".alert-danger" ).hide( "slow");
				}, 6000);

		});
		var obj = {
		    // autocomplete 
		    autoCategoria: function(){
		    	var url = "<?php echo e(route('autoCategoria')); ?>";

		        $.ajax({
		            type: "GET",
		            url: url,
		            success:function(data){
		                var aDatos=[];
		                aDatos = data.datos;
		                $('#eCodCategoria').typeahead({
		                  source: aDatos,
		                  displayField: 'tNombre',
		                  valueField: 'eCodCategoria',
		                });
		            },
		        });
		    }
		}
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>