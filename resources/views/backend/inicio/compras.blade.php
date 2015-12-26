<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8">
	<meta name="author" content="innovaciondesoftware.com.mx">
	<meta name="description" content="Sistema para gestionar actividades realacionadas con la empresa montage">

	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css-menu-innosoft.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css-innosoft-lg.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css-lg-innosoft.css">
	<link rel="stylesheet" type="text/css" href="assets/css/compras.css">
	<title>montage demo</title>
</head>
<body>
	<div id="disenio-body">
		<div id="seccion-menu">
		<div id="logotipo"><strong>MON<span style="color:#1C5072;">TAGE</span></strong></div>
			<ul id="acordion" class="acordion">
			<li>
				<div class="link"><i class="fa fa-bullhorn"></i>Autorizaciones <i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li ><a class="demo" href="#">Control de proyectos</a></li>
					<li><a class="demo" href="#">Ordenes de Trabajo</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-file-text-o"></i>Cotizaciones/Presupuesto <i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Cotizaciones</a></li>
					<li><a class="demo" href="#">Presupuesto</a></li>
				</ul>
			</li>
			<li  class="open">
				<div class="link"><i class="fa fa-shopping-cart"></i>Compras<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu" style="display:block;">
					<li><a href="compras">Compra</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-group"></i>Recursos Humano<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Personal</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-file-text"></i>Facturación<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Facturar</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-gear"></i>Herramienta<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Almaen</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-bank"></i>Entradas/Salidas<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Gastos</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-car"></i>Control Vehícular<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Refaciones</a></li>
				</ul>
			</li>
			<li>
				<div class="link"><i class="fa fa-table"></i>Tableros de Control<i class="fa fa-chevron-down"></i></div>
				<ul class="submenu">
					<li><a class="demo" href="#">Información</a></li>
				</ul>
			</li>
		</ul>
		</div>
		<div id="seccion-contenido">
			<div id="compras">
				<h2>Compras</h2>
				<div id="tabla-compras">
					<div class="panel panel-default">
					  <!-- Default panel contents -->
					  <div class="panel-heading title-montage">					  
						<ul>
							<li style="color: #7A003C;"><strong>Compras</strong></li>
							<li title="Generar PDF"><a href="#" class="demo"><img src="assets/img/icon/pdf.png" alt="modificar"></a></li>
							<li><a id="alta" href="javascript:void(0);" onclick="agregarCompras()" data-link="{{ url('/compra') }}" data-token="{{ csrf_token() }}">Alta O.C.</a></li>
							<li><a href="javascript:void(0);"  class="demo">Cotizar</a></li>
						</ul>
					  </div> 
					  <div class="panel-body">
					    <p>					    	
				    		<form>
					    		<div id="form-buscar-compra" class="col-md-4 col-lg-4">
					    		<label>Descripción</label>
						    		<input type="text" class="form-control">
					    		</div>
					    		<div id="form-buscar-compra" class="col-md-4  col-lg-4">
					    			<label>Unidad</label>
						    		<input type="text" class="form-control">
					    		</div>
					    		<div id="form-buscar-compra" class="col-md-4  col-lg-4">
					    			<label>Total</label>
						    		<input type="text" class="form-control">
					    		</div>
					    		<div id="form-buscar-compra" class="col-md-4  col-lg-4">
					    			<label>Fecha Inicio</label>
						    		<input type="text" id="dateInicial" name="dateInicial" class="form-control" value="" readonly>
					    		</div>
					    		<div id="form-buscar-compra" class="col-md-4  col-lg-4">
					    			<label>Fecha Final</label>
						    		<input type="text" id="dateFinal"  name="dateFinal" class="form-control" value="" readonly>
					    		</div>
					    		<div id="form-buscar-compra" class="col-md-4  col-lg-4">
					    			<button class="btn btn-success btn-block demo">Consultar</button>
					    		</div>
					    	</form>
					    </p>
					  </div></div>
					  <br><br>
					  <!-- Table -->
					  <table class="table table-striped">
					    <tr>
					    	<th>#</th>
					    	<th>Descripción</th>
					    	<th>Precio</th>
					    	<th>Cantidad</th>
					    	<th>Unidad</th>
					    	<th>Total</th>
					    	<th>Acciones</th>
					    </tr>
					    <tr>
					    	<td>1</td>
					    	<td>Mouse para PC</td>
					    	<td>$220.00</td>
					    	<td>3</td>
					    	<td>Piezas</td>
					    	<td>$660.00</td>
					    	<td>
					    		<a href="#" title="Modificar"><img src="assets/img/icon/modificar.png" alt="modificar"></a>
					    		<a href="#" title="Eliminar"><img src="assets/img/icon/eliminar.png" alt="Eliminar"></a>
					    		<a href="#"  title="Actualizar"><img src="assets/img/icon/consultar.png" alt="Actualizar"></a>
					    	</td>
					    </tr>
					    <tr>
					    	<td>2</td>
					    	<td>Teclado para PC</td>
					    	<td>$400.00</td>
					    	<td>1</td>
					    	<td>Piezas</td>
					    	<td>$400.00</td>
					    	<td>
					    		<a href="#" title="Modificar"><img src="assets/img/icon/modificar.png" alt="modificar"></a>
					    		<a href="#" title="Eliminar"><img src="assets/img/icon/eliminar.png" alt="Eliminar"></a>
					    		<a href="#" title="Actualizar"><img src="assets/img/icon/consultar.png" alt="Actualizar"></a>
					    	</td>
					    </tr>
					  </table>
					  <br><br>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<div id="ventana-modal">
		<div id="altaModal" class="modal " tabindex="-1" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Alta de Orden de Compra</h4>
		      </div>
			      <div class="modal-body">		
			      <div class="col-md-4 col-lg-4">
			      Fecha: 
			      	<input type="text" class="form-control" id="dateModal">
			      </div>      	
			        <p>
			        	<form>
				    		<div id="form-buscar-compra" class="col-md-12 col-lg-12">
				    			<label>Descripción:</label>
					    		<input type="text" class="form-control">
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Precio</label>
					    		<input type="text" class="form-control">
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Total</label>
					    		<input type="text" class="form-control">
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Cantidad</label>
					    		<input type="text"  name="dateInicial" class="form-control" value="" >
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Unidad</label>
					    		<input type="text"  name="dateFinal" class="form-control" value="" >
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Total</label>
					    		<input type="text"  name="dateFinal" class="form-control" value="" >
				    		</div>
				    		<div id="form-buscar-compra" class="col-md-12  col-lg-12">
				    			<label>Comentarios</label>
					    		<textarea rows="3" class="form-control"></textarea>
				    		</div>
				    	</form>
			        </p>
			      </div>
		      <div class="modal-footer">
		        <button type="button" class=" btnClose btn btn-default" data-dismiss="modal" >Cancelar</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
</body>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-menu-ineps.js"></script>
	<script type="text/javascript" src="assets/js/jquery-lg-innosoft.js"></script>
</html>