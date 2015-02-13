	<div id="content" class="span10">

		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="icon-angle-right"></i>
			</li>
			<li><a href="<?php echo URL; ?>postulacion/">Postulaciones</a></li>
		</ul>

		<a href="#" class="btn btn-info btn-setting">Registrar Una Postulacion</a>

		<br>
		<br>


		<div class="row-fluid sortable">		
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon white user"></i><span class="break"></span>Postulaciones</h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							<tr>
								<th>Número de documento</th>
								<th>Tipo de documento</th>
								<th>Nombre postulante</th>
								<th>Apellido postulante</th>
								<th>Estado</th>
								<th>Ficha</th>
								<th>Aciones</th>
							</tr>
						</thead>   
						<tbody>
							<?php foreach ($postulaciones as $postulacion) { ?>

							<tr>

								<td><?php if (isset($postulacion->nro_Documento)) echo htmlspecialchars($postulacion->nro_Documento, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php if (isset($postulacion->tipo_Documento)) echo htmlspecialchars($postulacion->tipo_Documento, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php if (isset($postulacion->nombre_Postulante)) echo htmlspecialchars($postulacion->nombre_Postulante, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php if (isset($postulacion->apellido_Postulante)) echo htmlspecialchars($postulacion->apellido_Postulante, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php if (isset($postulacion->estado)) echo htmlspecialchars($postulacion->estado, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php if (isset($postulacion->ficha)) echo htmlspecialchars($postulacion->ficha, ENT_QUOTES, 'UTF-8'); ?></td>
								<td>
									<a class="btn btn-zoom" href="<?php echo URL . 'postulaciones/ver_Postulacion/' . htmlspecialchars($postulacion->nro_Documento, ENT_QUOTES, 'UTF-8'); ?>"><i class="halflings-icon white edit"></i></a>
									<a  class="btn btn-info" href="<?php echo URL . 'postulaciones/editar_postulacion/' . htmlspecialchars($postulacion->nro_Documento, ENT_QUOTES, 'UTF-8'); ?>"><i class="halflings-icon white trash"></i></a>
								</td>
							</tr>
							<?php } ?>
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
		<h3>Registrar una postulacion</h3>
	</div>
	<div class="modal-body">

		<div class="row-fluid sortable">
			<div class="">

				<div class="box-content">
					<form class="form-horizontal">
						<fieldset>  
							<div class="control-group">
								<label class="control-label" for="focusedInput">Número del Documento</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_ID" id="focusedInput" type="text" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Tipo de Documento</label>
								<div class="controls">
									<select id="selectError3" name="txt_Pos_Tipo_Documento">
										<option></option>
										<option>T.I</option>
										<option>C.C</option>
										<option>C.E</option>

									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput"> Nombre del Postulante</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_Nombre" id="focusedInput" type="text" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Apellido del postulante</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_Apellido" id="focusedInput" type="text" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Correo del postulante</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_Correo" id="focusedInput" type="email" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Sexo</label>
								<div class="controls">
									<select id="selectError3" name="txt_Pos_Sexo">
										<option></option>
										<option>Masculino</option>
										<option>Femenino</option>

									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Ficha</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_Ficha" id="focusedInput" type="text" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Fecha Nacimiento</label>
								<div class="controls">
									<input class="input-xlarge focused" name="txt_Pos_FechaN" id="focusedInput" type="date" value="">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError1">Asociar Beneficio</label>
								<div class="controls">
									<select id="selectError1" name="txt_Pos_AsociarB" multiple data-rel="chosen">
										<option>Option 1</option>
										<option >Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
									<a href="beneficios.html" class="btn  btn-success " style="margin-bottom: 16px; margin-left: 7px;"><i class="halflings-icon white plus-sign"></i></a>
								</div>
							</div>	
						</fieldset>

						<div class="modal-footer">
							<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
							<input type="submit" class="btn btn-primary noty"  name="btn_Add_Postulacion" value="Aceptar"/>
							
						</div>
					</form>
				</div>
			</div><!--/span-->
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
