<div id="content" class="span10">


					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">Administradores</a>
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="">Perfil de Administrador</a></li>
					</ul>
					<div class="row-fluid">
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
											<th>Contraseña</th>
											<th>Cambiar Contraseña</th>
											<th>Correo</th>
										</tr>
									</thead>   
									<tbody>
										<tr>
											<td>001</td>
											<td class="center">Jean Gray</td>
											<td class="center">
												1234
											</td>
											<td class="center">
											<center><button class="btn btn-large btn-setting btn-primary">Cambiar contraseña</button></center>
											</td>
											<td class="center">
											phoniex38@hot-com
											</td>
										</tr>
									</tbody>
								</table>            
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
				<h3>Cambiar Contraseña</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="focusedInput"> Contraseña Anterior </label>
							<div class="controls">
								<input type="password" class="input-xlarge focused" id="focusedInput" type="text" value="">
							</div>
							<label class="control-label" for="focusedInput"> Nueva contraseña </label>
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