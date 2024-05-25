<?php

$inc = include("con_db2.php");

if ($inc) {
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $name = $row['nombre'];
            $apellidoP = $row['apellidop'];
            $apellidoM = $row['apellidom'];
            $curp = $row['curp'];
            $edad = $row['edad'];
            $fechaN = $row['fechaN'];
            $nss = $row['nss'];
            $especialidad = $row['especialidad'];
            $gradogrupo = $row['gradoYgrupo'];
            $email = $row['email'];
            $telefonoA = $row['telefonoA'];
            $direccion = $row['direccion'];
            $fecha = $row['fecha'];
            $nombreT = $row['nombretutor'];
            $apellidoPT = $row['apellidoTP'];
            $apellidoMT = $row['apellidoTM'];
            $telefonoT = $row['telefonoT'];

            
    ?>
<link rel="stylesheet" href="estilo.css">

    <div>
        <h3>DATOS DEL ALUMNO:</h3>
      <h2><?php echo  $name; ?></h2>
    
    
    <div>
    <p>
        <b>ID:</b> <?php echo $id; ?><br>
        <b>nombre:</b> <?php echo $name; ?><br>
        <b>apellido paderno:</b> <?php echo $apellidoP; ?><br>
        <b>apellido maderno:</b> <?php echo $apellidoM; ?><br>
        <b>curp:</b> <?php echo $curp; ?><br>
        <b>edad:</b> <?php echo $edad; ?><br>
        <b>fecha nacimiento:</b> <?php echo $fechaN; ?><br>
        <b>numero de seguro social:</b> <?php echo $nss; ?><br>
        <b>grado y grupo:</b> <?php echo $gradogrupo; ?><br>
        <b>correo electronico:</b> <?php echo $email; ?><br>
        <b>telefono de alumno:</b> <?php echo $telefonoA; ?><br>
        <b>dirrecion:</b> <?php echo $direccion; ?><br>
        <b>fecha:</b> <?php echo $fecha; ?><br>
       


   <h3>DATOS DEL TUTOR</h3>
   <b>nombre :</b> <?php echo $nombreT; ?><br>
   <b>apellido paderno:</b> <?php echo $apellidoPT; ?><br>
   <b>apellido maderno:</b> <?php echo $apellidoMT; ?><br>
   <b>telefono:</b> <?php echo $telefonoT; ?><br><br>
    
    
       
    </p>
    
    </div>
     <a href="index.php">volver</a>
    </div>


   
    <?php


        }
    }
}
?>
