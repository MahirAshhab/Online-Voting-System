<?php

session_start();
unset($_SESSION['admin_email']);
unset($_SESSION['admin_name']);
unset($_SESSION['admin_id']);
session_destroy();
header("location:adminindex.php");


?>