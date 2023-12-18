<?php
$user = "root";
$pass = "";
$host = "localhost";
$datab = "institutos_region_6";

$conn = new mysqli($host,$user,$pass,$datab);

$nombre = $_POST["nombre"];
$instituto = $_POST["instituto"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$instagram = $_POST["instagram"];
$face = $_POST["face"];
$twitter = $_POST["twitter"];
$partido = $_POST["partido"];
$descripcion = $_POST["descripcion"];

$cargar_datos = "INSERT INTO institutos (Num_Insti,Nombre_Insti,Direccion_Insti,Contacto_Mail,Contacto_Telefono,Contacto_Facebook,Contacto_Instagram,Contacto_Twitter,Descripcion_Insti)
                VALUE ('$instituto','$nombre','$direccion','$email','$telefono','$face','$instagram','$twitter','$descripcion')";
$query = mysqli_query($conn,$cargar_datos);

header("Location: ../DTER6 Web/form-carreras.php");
?>