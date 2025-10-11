<?php

$errorMSG = "";
;

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "REQUIERE NOMBRE ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "REQUIERE CORREO ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["telefono"])) {
    $errorMSG .= "REQUIERE CELULAR ";
} else {
    $telefono = $_POST["telefono"];
}

// MSG Guest
if(isset($_POST["guest"])){

if (empty($_POST["guest"])) {
    $errorMSG .= "REQUIERE CANTIDAD DE PERSONAS ";
} else {
    $guest = $_POST["guest"];
}
}


// MSG FECHA

if (empty($_POST["fecha"])) {
    $errorMSG .= "REQUIERE FECHA ";
} else {
    $fecha = $_POST["fecha"];
}
// MSG HORA

if (empty($_POST["hora"])) {
    $errorMSG .= "REQUIERE LA HORA ";
} else {
    $hora = $_POST["hora"];
}
// MESSAGE

if (empty($_POST["message"])) {
    $errorMSG .= "ESCRIBA EL MENSAJE ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "lostmonquey122@gmail.com";
$Subject = "portafolio web mensaje";

// prepare email body text
$Body = "";
$Body .= "NOMBRE: ";
$Body .= $name;
$Body .= "\n";
$Body .= "CORREO: ";
$Body .= $email;
$Body .= "\n";
$Body .= "CELULAR: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "PERSONAS: ";
$Body .= $guest;
$Body .= "\n";
$Body .= "FECHA: ";
$Body .= $fecha;
$Body .= "\n";
$Body .= "HORA: ";
$Body .= $hora;
$Body .= "\n";
$Body .= "MENSAJE: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "SUCEDIO UN ERROR :(";
    } else {
        echo $errorMSG;
    }
}

?>
