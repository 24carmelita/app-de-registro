<?php


$user = "Prueba";
$pass="1234";
$host="192.168.1.6:3306";
$db = "registrodealumnos";

$connection = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['register'])){

    if(strlen($_POST['nocontrol']) >= 1 &&
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
        strlen($_POST['telefonoT']) >= 1 ){

$nocontrol = $_POST['nocontrol'];
        $name = $_POST['name'];
        $apellidoP = $_POST['apellidoP'];
        $apellidoM = $_POST['apellidoM'];
        $curp = $_POST['curp'];
        $edad = $_POST['edad'];
        $fechaN = $_POST['fechaN'];
        $nss = $_POST['nss'];
        $especialidad = $_POST['especialidad'];
        $gradogrupo = $_POST['gradogrupo'];
        $email = $_POST['email'];
        $telefonoA = $_POST['telefonoA'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];
        $nombreT = $_POST['nombreT'];
        $apellidoPT = $_POST['apellidoPT'];
        $apellidoMT = $_POST['apellidoMT'];
        $telefonoT = $_POST['telefonoT'];

        if($connection)
        {
            echo "no se ha podido conectar";
        }
        else{
            echo "se conecto";
        }

        $datab = "registrodealumnos";

        $db = mysqli_select_db($connection, $datab);

        if(!$db)
        {
            echo "no se ha podido conectar a la tabla";
        }
        else{
            echo "tabla seleccionada";
        }

        $instruccion_SQL = mysqli_query($connection, $instruccion_SQL);

        $consulta = "SELECT * FROM datos ";

        $result = mysqli_query($connection, $consulta);
        if(!$result)
        {
            echo "no se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        echo "<th><h1>id</th></h1>";
        echo "<th><h1>nombre</th></h1>";
        echo "<th><h1>apellido</th></h1>";
        echo "<th><h1>apellido</th></h1>";
        echo "</tr>";

        while($colum = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><h2>" .$colum['id']. "</td></h2>";
            echo "<td><h2>" .$colum['nombre']. "</td></h2>";
            echo "<td><h2>" .$colum['apellido']. "</td></h2>";
            echo "<td><h2>" .$colum['apellido']. "</td></h2>";
        }




    }
}




?>