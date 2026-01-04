<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Productos\Producto;

$id = $nombre = $cantidad = $precioCompra = $precioVenta = $descripcion = $stockMinimo = $idCategoria = $idProveedor = $fechaRegistro = "";
$productoClass = new Producto();

if (isset($_POST['obtener'])) {
    $id = intval($_POST['idProducto']);
    
    $resultado = $productoClass->buscarProducto($id);

    if ($resultado) {
        $nombre = $resultado['nombre'] ?? '';
        $cantidad = $resultado['cantidad'] ?? '';
        $precioCompra = $resultado['precioCompra'] ?? '';
        $precioVenta = $resultado['precioVenta'] ?? '';
        $descripcion = $resultado['descripcion'] ?? '';
        $stockMinimo = $resultado['stockMinimo'] ?? '';
        $idCategoria = $resultado['idCategoria'] ?? '';
        $idProveedor = $resultado['idProveedor'] ?? '';
        $fechaRegistro = $resultado['fechaRegistro'] ?? '';
    } else {
        echo "<p>Producto no encontrado</p>";
    }
} elseif (isset($_POST['update'])) {
    $id = intval($_POST['idProducto']);
    $nombre = $_POST['nombre'] ?? '';
    $cantidad = intval($_POST['cantidad'] ?? 0);
    $precioCompra = floatval($_POST['precioCompra'] ?? 0);
    $precioVenta = floatval($_POST['precioVenta'] ?? 0);    
    $descripcion = $_POST['descripcion'] ?? '';
    $stockMinimo = intval($_POST['stockMinimo'] ?? 0);
    $idCategoria = intval($_POST['idCategoria'] ?? 0);
    $idProveedor = intval($_POST['idProveedor'] ?? 0);
    $fechaRegistro = $_POST['fechaRegistro'] ?? '';

    $exito = $productoClass->updateProducto(
        $id,
        $nombre,
        $cantidad,
        $precioCompra,
        $precioVenta,
        $descripcion,
        $stockMinimo,
        $idCategoria,
        $idProveedor,
        $fechaRegistro
    );

    if ($exito) {
        echo "<p style='color:green;'>Producto actualizado correctamente</p>";
    } else {
        echo "<p style='color:red;'>Error al actualizar el producto</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualizar productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f9;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        /* ---------------- BOTONES ---------------- */
        button {
            padding: 10px 18px;
            font-size: 15px;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 6px;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .Btn-salir {
            background: #e74c3c;
        }

        .Btn-agregar {
            background: #27ae60;
        }

        .Btn-update {
            background: #2980b9;
        }

        .Btn-delete {
            background: #e67e22;
        }

        .Btn-vender {
            background: #8e44ad;
            margin-top: 5px;
        }

        /* Contenedor de botones */
        .contenedormenu {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
            align-items: center;
        }

        .botones-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        /* ---------------- FORMULARIO ---------------- */
        form.contenedor {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .caja {
            flex: 1 1 47%;
            display: flex;
            flex-direction: column;
        }

        .caja label {
            margin-bottom: 6px;
            font-weight: bold;
        }

        .caja input {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .full-width {
            flex: 1 1 100%;
        }

        /* ---------------- RESPONSIVO ---------------- */
        @media (max-width: 600px) {
            form.contenedor {
                padding: 15px;
            }

            .caja {
                flex: 1 1 100%;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="contenedormenu">
        <h1>OBTENER PRODUCTOS</h1>



        <!-- Formulario de actualización -->
        <form action="" method="post" class="contenedor">

            <div class="caja">
                <label for="idProducto">ID Producto</label>
                <input type="text" name="idProducto" id="idProducto" value="<?= htmlspecialchars($id) ?>" />
            </div>

            <div class="caja">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($nombre) ?>" />
            </div>

            <div class="caja">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" value="<?= htmlspecialchars($cantidad) ?>" />
            </div>

            <div class="caja">
                <label for="precioCompra">Precio Compra</label>
                <input type="number" step="0.01" name="precioCompra" id="precioCompra"
                    value="<?= htmlspecialchars($precioCompra) ?>" />
            </div>

            <div class="caja">
                <label for="precioVenta">Precio Venta</label>
                <input type="number" step="0.01" name="precioVenta" id="precioVenta"
                    value="<?= htmlspecialchars($precioVenta) ?>" />
            </div>

            <div class="caja full-width">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" value="<?= htmlspecialchars($descripcion) ?>" />
            </div>

            <div class="caja full-width">
                <label for="stockMinimo">Stock Mínimo</label>
                <input type="number" name="stockMinimo" id="stockMinimo"
                    value="<?= htmlspecialchars($stockMinimo) ?>" />
            </div>

            <!-- nuevos -->

            <div class="caja">
                <label for="idProducto">ID Categoria</label>
                <input type="text" name="idCategoria" id="idCategoria" value="<?= htmlspecialchars($idCategoria) ?>" />
            </div>

            <div class="caja">
                <label for="nombre">Id Proveedor</label>
                <input type="text" name="idProveedor" id="idProveedor" value="<?= htmlspecialchars($idProveedor) ?>" />
            </div>

            <div class="caja">
                <label for="cantidad">Fecha De Registro</label>
                <input type="datetime-local" name="fechaRegistro" id="fechaRegistro"
                    value="<?= htmlspecialchars($fechaRegistro) ?>" />
            </div>

            <div class="caja full-width">
                <button type="submit" name="obtener" class="Btn-update">OBTENER PRODUCTO</button>
                <button type="submit" name="update" class="Btn-vender">ACTUALIZAR PRODUCTO</button>
                <button type="submit" name="insert" class="Btn-vender">INSERTAR PRODUCTO</button>
                <button type="submit" name="delete" class="Btn-vender">ELIMINAR PRODUCTO</button>

                <button type="reset" class="Btn-delete">LIMPIAR</button>

            </div>

        </form>

</body>

</html>