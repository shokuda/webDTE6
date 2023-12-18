<?php
$user = "root";
$pass = "";
$host = "localhost";
$datab = "institutos_region_6";

$conn = new mysqli($host,$user,$pass,$datab);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$consulta_instis = "SELECT Num_Insti, Nombre_Insti FROM institutos";
$instis = mysqli_query($conn,$consulta_instis);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="#">
        <link rel="shortcut icon" href="../IMG/imagenP.png" />
        <title>Registro de carreras</title>
    </head>
<body>

    <nav class="navbar" style = "box-shadow: 0 0 7px #9b9b9b;">
        <div class="container-fluid">
          <div class="navbar-brand" href="#">
            <img src="../IMG/logo-pba.svg" alt="Logo" width="100%" class="d-inline-block align-text-top">
        </div>
    </nav>
    <form class="row g-5" style="padding: 1%;" action="#" method="POST">
        <h1>Ingrese datos de carreras</h1>
        <div class="col-md-2">
          <label for="institutos" class="form-label">Instituto:</label>
          <select type="text" class="form-control" id="institutos" name="institutos">
            <option value="">Elegir...</option>
            <?php foreach($instis as $institutos) { ?>
              <option value="<?php $institutos["Num_Insti"]?>"><?php echo $institutos["Nombre_Insti"]?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-2">
          <label for="cantidad" class="form-label">Cantidad de Carreras</label>
          <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Generar</button>
        </div>
      </form> 
      <?php
      if (isset($_POST['institutos']) && isset($_POST['cantidad'])) {
        // Aquí puedes procesar los datos del formulario
        $instituto = $_POST['institutos'];
        $cantidadCarreras = $_POST['cantidad']; 
        
        echo '<form class="row g-5" style="padding: 1%;" action="../DTER6 Web/form-php/carreras.php" method="POST">';
        for($i=0;$i<$cantidadCarreras;$i++){
          echo '<h3> Carrera N°'. $i+1 .'</h3>';
          echo '<div class="col-md-3">';
          echo '<label for="nom_carrera" class="form-label">Nombre de la carrera</label>';
          echo '<input type="text" class="form-control" id="nom_carrera" name="nom_carrera">';
          echo '</div>';
          echo '<div class="col-md-3">';
          echo '<label for="perfil-profesional" class="form-label">Perfil profesional:</label>';
          echo '<input type="text" class="form-control" id="perfil-profesional" name="perfil_profesional">';
          echo '</div>';
          echo '<div class="col-md-2">';
          echo '<label for="inputState" class="form-label">Tipo:</label>';
          echo '<select id="inputState" class="form-select" name="tipo">';
          echo '<option selected>Elegir...</option>';
          echo '<option value="tecnicatura">Tecnicatura</option>';
          echo '<option value="maestria">Profesorado</option>';
          echo '</select>';
          echo '</div>';
          echo '<div class="col-md-12">';
          echo '<label for="descripcion" class="form-label">Descripción:</label>';
          echo '<textarea class="form-control" id="descripcion" rows="3" style="width: 1000px;" name="descripcion"></textarea>';
          echo '</div>';
        }
        echo '<div class="col-12">';
        echo '<input hidden type="text" value="'.$instituto.'"name="instituto">';
        echo '<button type="submit" class="btn btn-primary">Subir</button>';
        echo '</div>';
        echo '</form>';
      }
      ?>
</body>
</html>
