<?php $__env->startSection('title', 'Dashboard | Categorias'); ?>

<?php $__env->startSection('content'); ?>
	
	<?php echo $__env->make('layout.parts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Page Content -->
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Categorias</li>
				</ol>
			</div>
		</div>
		<form action="return false" method="POST">
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<button type="button" class="btn btn-default btn-sm shadow" id="btnNU1" onclick="location.href='<?php echo e(route("categorias.create")); ?>'"><i class="fa fa-pencil-square-o position-left"></i> Nuevo</button>
				</div>
		    	<div class="panel-body">
			     	<div class="row">
				      	<div class="col-md-12">
				      		<table class="table table-hover table-sm" id="tbDatos" style="width: 100%">
								<thead>
									<tr>
										<th>Estatus</th>
										<th>Acci&oacute;n</th>
										<th>Nombre</th>
									</tr>
								</thead>
								<tbody>
																	
									<?php $__currentLoopData = $aDatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rDato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td style="white-space: nowrap; text-align: center;"> <i class="<?php echo e($rDato->tClase); ?>" title="<?php echo e($rDato->Estatus); ?>" data-popup="tooltip" ></i> </td>
										<td style="white-space: nowrap;"> 
											<div class="form-group" style="display:inline-block;">
												<div class="dropdown">
												  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="ContextMenu<?php echo e($rDato->eCodCategoria); ?>">
												    <span class="caret"></span>
												  </button>
												  <ul class="dropdown-menu" aria-labelledby="ContextMenu<?php echo e($rDato->eCodCategoria); ?>">
												    <li><a class="dropdown-item" href="<?php echo e(action('web\Cata\CatCategoriaController@edit', $rDato->eCodCategoria)); ?>">Editar Categoria</a></li>
												    <li role="separator" class="divider"></li>
												    <li><a class="dropdown-item" href="<?php echo e(URL::route('categorias.destroy', $rDato->eCodCategoria)); ?>">Eliminar Categoria</a></li>
												    </li role="separator" class="divider"></li>
												    
												  </ul>
												</div>
											</div>&nbsp;
											<span><?php echo e($rDato->iCodCategoria); ?></span>
										</td>
										<td style="white-space: nowrap; width: 100%"> <?php echo e($rDato->tNombre); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
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
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo e(asset('js/web/sist/coboca.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>