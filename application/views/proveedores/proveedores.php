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

				<li><a href="proveedores.html">proveedores</a></li>
			</ul>

			<a href="#" class="btn btn-info btn-setting">Registrar un proveedor</a>

			<br>
			<br>


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Proveedores</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id del Proveedor</th>
								  <th>Nombre del proveedor</th>
								  <th>Apellido del proveedor</th>
								  <th>Aciones</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td>001</td>
								<td class="center">Juan David</td>
								<td class="center">Agudelo Dquue</td>
								<td class="center">

									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>003</td>
								<td class="center">Juan David</td>
								<td class="center">Agudelo Dquue</td>
								<td class="center">

									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<tr>
								<td>002</td>
								<td class="center">Juan David</td>
								<td class="center">Agudelo Dquue</td>
								<td class="center">

									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
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
			<h3>Registrar Proveedor</h3>
		</div>
		<div class="modal-body">
			
			<div class="row-fluid sortable">
				<div class="">

					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Id del Proveedor</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Nombre del Proveedor</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Apellidos del proveedor</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="">
								</div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
			<a href="#" class="" data-dimiss="modal"><button class="btn btn-primary noty" data-noty-options='{"text":"Registro Exitoso","layout":"topLeft","type":"success"}'> Aceptar</button></a>

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