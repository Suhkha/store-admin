<?php include('_partials/header.php'); 
$product = new Product();
$data_product = $product->index();
?>
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
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>SKU</th>
                            <th>Precio</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < sizeof($data_product); $i++) { ?>
                            <tr>
                                <td>
                                    <a href="update-product.php?id=<?php echo $data_product[$i]['id']; ?>">
                                        <?php echo $data_product[$i]['id']; ?>
                                    </a>
                                </td>
                                <td><?php echo $data_product[$i]['name']; ?></td>
                                <td><?php echo $data_product[$i]['sku']; ?></td>
                                <td><?php echo $data_product[$i]['price']; ?></td>  
                                <td><a href="delete.php?id=<?php echo $data_product[$i]['id']; ?>">Eliminar</a></td>                              
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>