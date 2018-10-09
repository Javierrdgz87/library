<?php $__env->startSection('title', 'Dashboard | Categorias'); ?>

<?php $__env->startSection('content'); ?>
	
	<?php echo $__env->make('layout.parts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Page Content -->
	<div class="container">
		<div class="row mt-4">
			<div class="col">
				
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
				  </ol>
				</nav>
			</div>
		</div>
		<form action="<?php echo e(route('categorias.create')); ?>">
		  	<div class="card border-secondary mt-1">
				<div class="card-header">
			    	<button type="submit" class="btn btn-default btn-outline-dark btn-sm shadow" id="btnNU1"><i class="fa fa-save position-left"></i> Nuevo</button>
				</div>
		    	<div class="card-body">
			     	<div class="row">
				      	<div class="col">
				      		<table class="table table-hover" id="tbDatos">
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
											<div class="btn-group">
						                    	<button type="button" class="btn btn-xs btn-default btn-raised dropdown-toggle" data-toggle="dropdown" > <span class="icon-more"></span></button>
						                    	<ul class="dropdown-menu dropdown-menu-right" id="ContextMenu<?php echo e($rDato->iCodCategoria); ?>" >
													
													
													
													<li class="divider"></li>
													
												</ul>
											</div>&nbsp;
										</td>
										<td style="white-space: nowrap; width: 100%"> <?php echo e($rDato->tNombre); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
		      			</div>
		      		</div>
		    	</div>
		    	<!-- /.card-body -->
			</div>
			<!-- /.card -->
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