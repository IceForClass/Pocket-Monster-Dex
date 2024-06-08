<?php
    session_start();
    if (isset($_GET["usuarioReenviado"])) {
        $usuario = addcslashes($_GET["usuarioReenviado"], "'+\?¿@");
        $password = md5(addcslashes($_GET["passwordreenviada"], "'\?¿@"));
    } else {
        $usuario = addcslashes($_POST["usuario"], "'+\?¿@");
        $password = md5(addcslashes($_POST["password"], "'\?¿@"));
    }

    // Consultar a una base de datos

    $bd = new mysqli("localhost:3307","root","","pocket_monster");
    $sql = "select * from usuarios where username like '$usuario' and password like '$password' ";
    $result = $bd->query($sql);

    if ($result -> num_rows == 1) {  
        $_SESSION["username"] = $usuario;
        header("location:../index.php?msg=open");
    } else {
        header("location:../paginas/login.php?msg=loginmal");
    }


    ?>