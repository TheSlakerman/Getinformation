<div id="content" class="span10">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li>

							<a href="#">Control de Existencias</a> 
							<i class="icon-angle-right"></i>
						</li>

						<li><a href="<?php URL echo ?>materiales/">Materiales</a></li>
					</ul>

					<a href="#" class="btn btn-info btn-setting">Registrar Un material</a>


					<br>
					<br>


					<div class="row-fluid sortable">		
						<div class="box span12">
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white user"></i><span class="break"></span>Materiales</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
									<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
								</div>
							</div>
							<div class="box-content">
								<table class="table table-striped table-bordered bootstrap-datatable datatable">
									<thead>
										<tr>
											<th>Id del Material</th>
											<th>Tipo de elemento</th>
											<th>Tipo de Embalaje</th>
											<th>Nombre del Material</th>
											<th>Fecha de Ingreso</th>
											<th> Descripcion Material</th>
											<th>Aciones</th>
										</tr>
									</thead>   
									<tbody>
									<?php 
										foreach ($materiales as $key => $value) {
											# code...
										}


									 ?>

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
				<h3>Registrar Material</h3>
			</div>
			<div class="modal-body">

				<div class="row-fluid sortable">
					<div class="">

						<div class="box-content">
							<form class="form-horizontal" action="<?php echo URL; ?>materiales/addMaterial" method="POST">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Id del Material</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput " name="id_Material" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Tipo de Elemento</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput " name="tipo_Elemento" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="selectError">Tipo de embalaje</label>
										<div class="controls">
											<select id="selectError " name="tipo_Embalaje" data-rel="chosen">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
											<a href="embalaje.html" class="btn  btn-success " style="margin-bottom: 16px; margin-left: 7px;"><i class="halflings-icon white plus-sign"></i></a>
										</div>

									</div>
									<div class="control-group">
										<label class="control-label" for="selectError1">Marca</label>
										<div class="controls">
											<select id="selectError1 " name="marca" data-rel="chosen">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
											<a href="marca.html" class="btn  btn-success " style="margin-bottom: 16px; margin-left: 7px;"><i class="halflings-icon white plus-sign"></i></a>
										</div>

									</div>
									<div class="control-group">
										<label class="control-label" for="selectError2">Asociar Proveedor</label>
										<div class="controls">
											<select id="selectError2 " name="proveedor" data-rel="chosen">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
											<a href="proveedores.html" class="btn  btn-success " style="margin-bottom: 16px; margin-left: 7px;"><i class="halflings-icon white plus-sign"></i></a>
										</div>

									</div>

									<div class="control-group">
										<label class="control-label" for="focusedInput"> Nombre del Material</label>
										<div class="controls"> 
											<input class="input-xlarge focused" id="focusedInput " name="nombre_material" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Fecha de Ingreso </label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput " name="fecha_Ingreso" type="date" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Descripcion del Material</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput  " name="descripcion" type="text" value="">
										</div>
									</div>
								</fieldset>
								<input type="submit" class="btn btn-primary noty " name="btn_Material" value="Aceptar" />
							</form>

						</div>
					</div><!--/span-->
				</div>
			</div>