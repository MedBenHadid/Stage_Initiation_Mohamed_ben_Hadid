<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["id"]);
header("Location:index.php");
?>