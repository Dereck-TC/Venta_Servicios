<?php

function usuarioAutenticado()
{
    if (!revisarUsuario()) {
        header('location: login.php');
        exit();
    }
}

function revisarUsuario()
{
    return isset($_SESSION['user_token']);
}

session_start();
