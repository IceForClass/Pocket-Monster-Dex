<?php
    $usuario = addcslashes($_POST["usuario"], "'+\?¿@");
    $password = md5 (addcslashes($_POST["password"], "'\?¿@"));

    $bd = new mysqli("localhost:3307","root","","pocket_monster");

    $sql = "INSERT INTO usuarios(username, password, tipo) VALUES ('$usuario', '$password', 'Usuario')";
    
    $resultado = $bd->query($sql);

    $usuarioReenviado = $_POST["usuario"];
    $contraseñaReenviada = $_POST["password"];

    header("location:checklogin.php?usuarioReenviado=$usuarioReenviado&passwordreenviada=$contraseñaReenviada");

    ?>