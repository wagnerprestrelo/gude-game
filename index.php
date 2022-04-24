<?php
session_start();
if (isset($_SESSION["login"])){
    header('Location: usuario.html');
} else {
    header('Location: login.html');
}