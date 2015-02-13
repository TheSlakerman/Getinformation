				<div id="content" class="span10">


					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="<?php echo URL; ?>postulaciones/">Postulaciones</a><i class="icon-angle-right"></i></li>
						<li><a href="" > Ver detalles </a></li>
					</ul>
					<br>
					<div class="row-fluid sortable">		
						<div class="box span12">
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white user"></i><span class="break"></span>Postulante: <?php if (isset($postulacion->nombre_Postulante)) echo htmlspecialchars($postulacion->nombre_Postulante, ENT_QUOTES, 'UTF-8'); ?></h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
									<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
								</div>
							</div>
							<div class="box-content">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Número de documento</th>
											<th>Tipo de documento</th>
											<th>Nombre postulante</th>
											<th>Apellido postulante</th>
											<th>Correo</th>
											<th>Sexo</th>
											<th>Ficha</th>
											<th>Fecha de nacimiento</th>

											
										</tr>
									</thead>   
									<tbody>

									</tbody>
								</table>            
							</div>
						</div><!--/span-->

					</div><!--/row-->


				</div><!--/.fluid-container-->