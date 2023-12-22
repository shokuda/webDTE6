<?php
$user = "root";
$pass = "";
$host = "localhost";
$datab = "institutos_region_6";

$conn = new mysqli($host,$user,$pass,$datab);

$instituto = $_POST["instituto"];
$nom_carrera = $_POST["nom_carrera"];
$perfil_profesional = $_POST["perfil_profesional"];
$tipo = $_POST["tipo"];
$descripcion = $_POST["descripcion"];

$cargar_carreras = "INSERT INTO carreras (Inst,Nombre_Carrera,Tipo,Perfil_Profesional,Descripcion)
                    VALUES ('$instituto','$nom_carrera','$tipo','$perfil_profesional','$descripcion')";
$query = mysqli_query($conn,$cargar_carreras);

header("location: ../form.html")
?>