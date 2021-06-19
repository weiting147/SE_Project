<?php 
    setcookie("account", "", time() - 3600, '/');
    setcookie("identity", "", time() - 3600, '/');
    header('Location:Login.php');
?>