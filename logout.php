<?php
session_start();
unset($_SESSION["Sdrn"]);
unset($_SESSION["full_name"]);
header("Location:index.php");
?>