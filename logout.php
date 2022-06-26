<?php
session_start();
unset($_SESSION["usuario_id"]);

header("Location: login.php");