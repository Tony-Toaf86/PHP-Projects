<?php 
require_once __DIR__ . '/vendor/autoload.php';

use App\Productos\Producto;

$producto = new Producto();
$categorias = $producto->listarProductos('categorias');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uso de input en prediccion</title>
</head>
<body>

<h1>usod de input como predccion</h1>


<input type="text" name="noombreCategoria" list="listaCategoria" autocomplete="off">
<datalist id="listaCategoria">
    <?php foreach ($categorias as $p): ?>
        <option value="<?= htmlspecialchars($p['nombreCategoria']) ?>">
    <?php endforeach ?>
</datalist>



    
</body>
</html>