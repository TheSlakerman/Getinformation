				<!-- start: Content -->
				<div id="content" class="span10">


					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="#">Administradores</a></li>
					</ul>
					<div class="row-fluid">

						<div class="box span12">
							<div class="box-header">
								<h2><i class="halflings-icon white th"></i><span class="break"></span>Panel de Administracion</h2>
							</div>
							<div class="box-content">
								<ul class="nav tab-menu nav-tabs" id="myTab">
									<li class="active"><a href="#Historial">Historial</a></li>
									<li><a href="#Registro">Registro de Administrador</a></li>

								</ul>

								<div id="myTabContent" class="tab-content">
									<div class="tab-pane active " id="Historial">
										<div class="box span12">
											<div class="box-header" data-original-title>
												<h2><i class="halflings-icon white user"></i><span class="break"></span>Administradores</h2>
											</div>
											<div class="box-content">
												<table class="table table-striped table-bordered bootstrap-datatable datatable">
													<thead>
														<tr>
															<th>Id Usuario</th>
															<th>Usuario</th>
															<th>Estado</th>
															<th>Ver Detalles</th>
															<th>Cambiar Estado</th>
														</tr>
													</thead>   
													<tbody>
														<tr>
															<td>001</td>
															<td class="center">Jean Gray</td>
															<td class="center">
																<span class="label label-important">Inhabilitado</span>
															</td>
															<td class="center">
																<a class="btn btn-success" href="dt_administrador.html">
																	<i class="halflings-icon white zoom-in"></i>  
																</a>
															</td>
																<td class="center">
																	<a href="#" class="btn btn-warning"> <i class="halflings-icon white edit"></i> </a>
																	<a class="btn btn-danger" href="#">
																		<i class="halflings-icon white trash"></i> 
																	</a>
																</td>
														</tr>
														<tr>
															<td>001</td>
															<td class="center">Jean Gray</td>
															<td class="center">
																<span class="label label-important">Inhabilitado</span>
															</td>
															<td class="center">
																<a class="btn btn-success" href="dt_administrador.html">
																	<i class="halflings-icon white zoom-in"></i>  
																</a>
															</td>
																<td class="center">
																	<a href="#" class="btn btn-warning"> <i class="halflings-icon white edit"></i> </a>
																	<a class="btn btn-danger" href="#">
																		<i class="halflings-icon white trash"></i> 
																	</a>
																</td>
														</tr>
														</tbody>
													</table>            
												</div>
											</div><!--/span-->

										</div>
										<div class="tab-pane " id="Registro">
											<div class="row-fluid sortable">
												<div class="">

													<div class="box-content">
														<form class="form-horizontal">
															<fieldset>
																<div class="control-group">
																	<label class="control-label" for="focusedInput">Id Usuario</label>
																	<div class="controls">
																		<input class="input-xlarge focused" id="focusedInput" type="text" value="">
																	</div>
																</div>
																<div class="control-group">
																	<label class="control-label" for="focusedInput"> Usuario </label>
																	<div class="controls">
																		<input class="input-xlarge focused" id="focusedInput" type="text" value="">
																	</div>
																	<label class="control-label" for="focusedInput"> Contraseña </label>
																	<div class="controls">
																		<input type="password" class="input-xlarge focused" id="focusedInput" type="text" value="">
																	</div>
																	<div class="control-group">
																		<label class="control-label" for="focusedInput">Correo</label>
																		<div class="controls">
																			<input type="email" class="input-xlarge focused" id="focusedInput" type="text" value="">
																		</div>
																	</div>	
																	<button href="#" style="margin-left: 144px;margin-bottom: 1px;margin-top: 18px;" class="btn btn-large btn-success">Aceptar</button>
																	<button href="#" style="margin-left: 144px;margin-bottom: 1px;margin-top: 18px;" class="btn btn-large btn-danger">Limpiar</button>
																</div>
															</fieldset>
														</form>

													</div>
												</div><!--/span-->
											</div>
										</div>
									</div>
								</div>
							</div><!--/span-->

						</div><!--/row-->			



					</div><!--/.fluid-container-->

					<!-- end: Content -->
				</div><!--/#content.span10-->
			</div><!--/fluid-row-->
			<div class="modal hide fade" id="myModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>Actualizar Información</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput"> Usuario </label>
								<div class="controls">
									<input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
								<label class="control-label" for="focusedInput"> Contraseña </label>
								<div class="controls">
									<input type="password" class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Correo</label>
									<div class="controls">
										<input type="email" class="input-xlarge focused" id="focusedInput" type="text" value="">
									</div>
								</div>	
							</div>
						</fieldset>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
					<a href="#" class="btn btn-primary">Guardar Cambios</a>
				</div>
			</div>

			<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<ul class="list-inline item-details">
						<li><a href="http://themifycloud.com">Admin templates</a></li>
						<li><a href="http://themescloud.org">Bootstrap themes</a></li>
					</ul>
				</div>
			</div>

			<div class="clearfix"></div>
