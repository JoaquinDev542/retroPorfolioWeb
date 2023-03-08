<?php
print_r($_POST);
// Getting the info
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['textarea'];

// How I´m gonna get this info
$message = "Este mensaje fue enviado por: " . $name . ",\r\n";
$message .= "Su email es: " . $email .  ",\r\n";
$message .= "Mensaje: " . $_POST['message'] . ",\r\n";
$message .= "Enviado el: " . date('d/m/Y' , time());

$to = "joaquingdeveloper@gmail.com";
$body = "Mail enviado desde mi porfolio web";

// Mail Function
mail($to , $body , $message);
?>


<!-- // Insertar los datos en la tabla "contacto"
$sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if (mysqli_query($conn, $sql)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn); -->

<!-- // Preparar la consulta
$stmt = $conn->prepare("INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $mensaje);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close(); -->