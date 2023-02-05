
<?php
session_start();
if(!$_SESSION['usuario_cad']) {
	header('Location: login.php');
	exit();
}
