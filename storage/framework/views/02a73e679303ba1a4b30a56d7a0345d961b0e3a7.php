<?php $__env->startSection('title', 'Dashboard | Books'); ?>

<?php $__env->startSection('content'); ?>
	
	<?php echo $__env->make('layout.parts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Page Content -->
	<div class="container">
	  <div class="card border-secondary mt-4">
		  <div class="card-header">
		    
		  </div>
	    <div class="card-body">
	      <div class="jumbotron">
	        <h1>Prestamo de libros</h1>
	        <p>En esta peque&ntilde;a aplicaci&oacute;n puede realizar la busqueda de libros y categor&iacute;as, as&iacute; como realizar la actualizaci&oacute;n de la informaci&oacute;n y "prestar" libros.</p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /.container -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo e(asset('js/web/sist/coboca.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>