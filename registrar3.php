<?php
$servername = "192.168.1.6:3306";
$username = "Prueba"; // Cambia esto por tu usuario de MySQL
$password = "1234"; // Cambia esto por tu contraseña de MySQL
$dbname = "registrodealumnos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nocontrol = $_POST['nocontrol'];
$name = $_POST['name'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
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

// Insertar datos en la base de datos
$sql = "INSERT INTO datos (nocontrol, nombre, apellidop, apellidom, curp, edad, fechaN, nss, especialidad, gradoYgrupo, email, telefonoA, direccion, fecha, nombretutor, apellidoTP, apellidoTM, telefonoT ) VALUES ('$nocontrol', '$name', '$apellidoP', '$apellidoM', '$curp', '$edad', '$fechaN', '$nss', '$especialidad', '$gradogrupo', '$email', '$telefonoA', '$direccion', '$fecha', '$nombreT',' $apellidoPT', '$apellidoMT','$telefonoT')";


if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
