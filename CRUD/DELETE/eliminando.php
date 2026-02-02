<?php
include_once "conexion.php";
$id = $_POST['id'];
if(empty($id)){
    echo "El ID no puede estar vacío.";
    exit;
}

$stmt = $conexion->prepare("DELETE FROM product WHERE id = ?");
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "Registro ". $id . " Eliminado<br>";
} else {
    echo "Error al eliminar el registro: " . $stmt->error;
}
// $eliminar = "DELETE FROM product WHERE id = '$id'";
// // $resultado = mysqli_query($conexion, $eliminar);

// if (mysqli_query($conexion, $eliminar)) {
//     echo "Registro ". $id . " Eliminado<br>";
// } else {
//     echo "Error al eliminar el registro: " . mysqli_error($conexion);
// }
// 
$stmt->close();
$conexion->close();
?>