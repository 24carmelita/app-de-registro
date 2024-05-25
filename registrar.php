<?php

include("con_db2.php");

if(isset($_POST['register'])){

if(
    strlen($_POST['nocontrol']) >= 1 &&
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['apellidoP']) >= 1 &&
    strlen($_POST['apellidoM']) >= 1 &&
    strlen($_POST['curp']) >= 1 &&
    strlen($_POST['edad']) >= 1 &&
    strlen($_POST['fechaN']) >= 1 &&
    strlen($_POST['nss']) >= 1 &&
    strlen($_POST['especialidad']) >= 1 &&
    strlen($_POST['gradogrupo']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['telefonoA']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['fecha']) >= 1 &&
    strlen($_POST['nombreT']) >= 1 &&
    strlen($_POST['apellidoPT']) >= 1 &&
    strlen($_POST['apellidoMT']) >= 1 &&
    strlen($_POST['telefonoT']) >= 1 )
    {

        $nocontrol = trim($_POST['nocontrol']);
        $name = trim($_POST['name']);
        $apellidoP = trim($_POST['apellidoP']);
        $apellidoM = trim($_POST['apellidoM']);
        $curp = trim($_POST['curp']);
        $edad = trim($_POST['edad']);
        $fechaN = trim($_POST['fechaN']);
        $nss = trim($_POST['nss']);
        $especialidad = trim($_POST['especialidad']);
        $gradogrupo = trim($_POST['gradogrupo']);
        $email = trim($_POST['email']);
        $telefonoA = trim($_POST['telefonoA']);
        $direccion = trim($_POST['direccion']);
        $fecha = trim($_POST['fecha']);
        $nombreT = trim($_POST['nombreT']);
        $apellidoPT = trim($_POST['apellidoPT']);
        $apellidoMT = trim($_POST['apellidoMT']);
        $telefonoT = trim($_POST['telefonoT']);

       


       $datab = "registrodealumnos";
       
        $resultado = mysqli_select_db($conex,$datab);

        if ($resultado){
            ?>
            <h3>te has registrardo</h3>
            <?php

        } else{
            ?>
            <h3>no te has registrardo </h3>
            <?php

        }

}

            else{
                ?>
                <h3>no has puesto ningun campo </h3>
                <?php


}

$rg = "INSERT INTO datos(nocontrol, nombre, apellidop, apellidom, curp, edad, fechaN, nss, especialidad, gradoYgrupo, email, telefonoA, direccion, fecha, nombretutor, apellidoTP, apellidoTM, telefonoT) VALUES ('$nocontrol','$name','$apellidoP','$apellidoM','$curp','$edad','$edad','$fechaN','$nss','$especialidad','$gradogrupo','$email','$telefonoA','$direccion','$fecha','$nombreT','$apellidoPT','$apellidoMT','$telefonoT')";

$rg = mysqli_query($conex,$rg);

}
?>