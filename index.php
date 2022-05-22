<?php
session_start();
if (isset($_SESSION["login"])){
    header('Location: usuario.php');
} else {
    header('Location: login.php');
}