<?php 
include_once "conexion.php";


$stmt = $conexion->prepare(query: "SELECT id, proname, amount FROM product");

$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["proname"]. " - Amount: " . $row["amount"]. "<br>";
    }
} else {
    echo "no hay resultados";
}
$stmt->close();
$conexion->close();

?> 