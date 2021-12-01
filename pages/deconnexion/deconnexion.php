<?php

session_start();

unset($_SESSION['util_isAdmin']);

session_destroy();


header('Location: ../accueil/index.php');
exit();

?>