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

						<li><a href="materiales.html">Materiales</a><i class="icon-angle-right"></i></li>
						<li><a href="editar_material.html">Editar Material</a></li>
					</ul>



					
					<br>

					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
								<h3>Editar material</h3>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Tipo de Elemento</label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError">Tipo de embalaje</label>
									<div class="controls">
										<select id="selectError" data-rel="chosen">
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
										<select id="selectError1" data-rel="chosen">
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
										<select id="selectError2" data-rel="chosen">
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
										<input class="input-xlarge focused" id="focusedInput" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Fecha de Ingreso </label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" value="">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">Descripcion del Material</label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" value="">
									</div>
								</div>
								<a href="#" class="" data-dimiss="modal"><button class="btn btn-primary noty" data-noty-options='{"text":"Registro Exitoso","layout":"topLeft","type":"success"}'> Aceptar</button></a>
								<a href="#" class="btn" data-dismiss="modal">Limpiar</a>
							</fieldset>
						</form>

					</div>

					<div class="row-fluid sortable">		
						<div class="box span12">
							<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white user"></i><span class="break"></span>Material: Oficina</h2>
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
											<th>Marca</th>
											<th>Proveedor</th>
											<th>Nombre del Material</th>
											<th>Fecha de Ingreso</th>
											<th> Descripcion Material</th>

										</tr>
									</thead>   
									<tbody>
										<tr>
											<td>001</td>
											<td class="center">Oficina</td>
											<td class="center">Caja</td>
											<td class="center">
												Lapices
											</td>
											<td>Pencil</td>
											<td>Cristofer</td>
											<td class="center"> 01/07/2013</td>
											<td>Es un buen Material</td>

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
				<h3>Registrar Material</h3>
			</div>
			<div class="modal-body">

				<div class="row-fluid sortable">
					<div class="">

						
					</div><!--/span-->
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
					<a href="#" class="" data-dimiss="modal"><button class="btn btn-primary noty" data-noty-options='{"text":"Registro Exitoso","layout":"topLeft","type":"success"}'> Aceptar</button></a>

				</div>
			</div>

			<div class="modal hide fade" id="myModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3>Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here settings can be configured...</p>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
					<a href="#" class="btn btn-primary">Save changes</a>
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