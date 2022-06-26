<?php
session_start();
if (isset($_SESSION["usuario_id"])){
    header('Location: usuario.php');
} else {
    header('Location: login.php');
}