<?php
include ("../bd/conexion.php");

if (isset($_POST['Enviar'])){
	if (strlen($_POST['nombre'])>=1&&
	strlen($_POST['apellido'])>=1&&
	strlen($_POST['correo'])>=1&&
	strlen($_POST['telefono'])>=1&&
	strlen($_POST['descripcion'])>=1){
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
		$descripcion = trim($_POST['descripcion']);
$consulta = "INSERT INTO contactos (Nombre_contac, Apellido_contac, Correo_contac, Telefono_contac, Descripcion_contac) VALUES('$nombre', '$apellido', '$correo', '$telefono', '$descripcion') ";						
$resultado = $conn->prepare($consulta);
$resultado->execute(); 



	echo"<script>
	alert('Su mensaje se ha enviado exitosamente');
	document.location='it_contact.php';
	</script>";


}
}
?>