<?php
include_once "conexion.php";

$id = $_POST['id'];
$proname = $_POST['proname'];

if(empty($id) || empty($proname)){
    echo "Los campos no pueden estar vacios";
    exit();
}
$stmt = $conexion->prepare("UPDATE product SET proname=? WHERE id=?");
$stmt->bind_param("si", $proname, $id);
if ($stmt->execute()) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $stmt->error;
}

// $consulta = "UPDATE product SET proname='$proname' WHERE id=$id";

// if(mysqli_query($conexion, $consulta)){
//     echo "Registro actualizado correctamente";
// }else{
//     echo "Error al actualizar el registro: " . mysqli_error($conexion);
// }
$stmt->close();
$conexion->close();
?>


