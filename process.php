<?php
session_start();
// var_dump($_POST);
$_SESSION['myPost'] = $_POST;
header('Location: result.php');
exit();
?>
