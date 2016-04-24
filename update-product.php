<?php 
$id = $_GET['id'];
include('_partials/header.php'); 

$product = new Product();
$data_product = mysql_fetch_object($product->find($id));
var_dump($data_product);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
<div class="container">
	<p><a href="index.php">Regresar</a></p>
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title">Actualizar producto</h3>
	  </div>
	  <div class="panel-body">
		  <div class="col-sm-12">
		    <form class="form-horizontal" method="post" action="save.php">
		    <input name="id" class="form-control" type="hidden" value="<?php echo $id; ?>">
		    <div class="row">
		    	<div class="col-sm-6">
		    		<div class="form-group">
		    	  		<label class="control-label" for="">Nombre</label>
		    	  		<input type="text" class="form-control" name="name" value="<?php echo $data_product->name; ?>">
		    		</div>
		    	</div>
		    	<div class="col-sm-5 col-sm-offset-1">	
				    <div class="form-group">
					    <label class="control-label" for="">SKU</label>
					    <input type="text" class="form-control" name="sku" value="<?php echo $data_product->sku; ?>">
				  	</div>
				</div>
		    </div>
		    	
		    	<div class="row">
				    <div class="col-md-6">
					    <div class="form-group">
					      <label class="control-label">Categoría</label>
					      <select class="form-control" name="category">
					        <option value="<?php echo $data_product->category; ?>"><?php echo $data_product->category; ?></option>
					        <option value="limpieza">Limpieza</option>
					        <option value="alimentos">Alimentos</option>
					        <option value="belleza">Belleza</option>
					      </select>
					    </div>
				    </div>
				    <div class="col-sm-5 col-sm-offset-1">
				    	<div class="form-group">
				    	  <label class="control-label" for="">Precio</label>
				    	  <input type="text" class="form-control" name="price" value="<?php echo $data_product->price; ?>">
				    	</div>
			    	</div>
		    	</div>
		    	<div class="form-group">
		    	  <label class="control-label" for="">Descripción</label>
		    	  <textarea type="text" class="form-control" name="description" value="<?php echo $data_product->description; ?>"><?php echo $data_product->description; ?></textarea>
		    	</div>

		    	<div class="form-group">
		    	    <div class="col-sm-12">
			    	    <label class="control-label"></label>
			    	    <button type="submit" class="btn btn-primary">Actualizar</button>
		    	    </div>
		    	</div>

		    </form>
		   </div>

	    
	  </div>
	</div>
</div>
</body>
</html>