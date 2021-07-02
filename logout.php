<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_id_generated']);
session_destroy();
header("location:index.php");


?>