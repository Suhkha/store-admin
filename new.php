<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php include('_partials/__block--alerts.php'); ?>
	<p><a href="index.php">Regresar</a></p>
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title">Nuevo producto</h3>
	  </div>
	  <div class="panel-body">
		  <div class="col-sm-12">
		    <form class="form-horizontal" method="post" action="save.php">
		    <div class="row">
		    	<div class="col-sm-6">
		    		<div class="form-group">
		    	  		<label class="control-label" for="">Nombre</label>
		    	  		<input type="text" class="form-control" name="name">
		    		</div>
		    	</div>
		    	<div class="col-sm-5 col-sm-offset-1">	
				    <div class="form-group">
					    <label class="control-label" for="">SKU</label>
					    <input type="text" class="form-control" name="sku">
				  	</div>
				</div>
		    </div>
		    	
		    	<div class="row">
				    <div class="col-md-6">
					    <div class="form-group">
					      <label class="control-label">Categoría</label>
					      <select class="form-control" name="category">
					        <option value="">Seleccione</option>
					        <option value="limpieza">Limpieza</option>
					        <option value="alimentos">Alimentos</option>
					        <option value="belleza">Belleza</option>
					      </select>
					    </div>
				    </div>
				    <div class="col-sm-5 col-sm-offset-1">
				    	<div class="form-group">
				    	  <label class="control-label" for="">Precio</label>
				    	  <input type="text" class="form-control" name="price">
				    	</div>
			    	</div>
		    	</div>
		    	<div class="form-group">
		    	  <label class="control-label" for="">Descripción</label>
		    	  <textarea type="text" class="form-control" name="description"></textarea>
		    	</div>

		    	<div class="form-group">
		    	    <div class="col-sm-12">
			    	    <label class="control-label"></label>
			    	    <button type="submit" class="btn btn-primary">Registrarse</button>
		    	    </div>
		    	</div>

		    </form>
		   </div>

	    
	  </div>
	</div>
</div>
</body>
</html>