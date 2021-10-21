<?php
session_start();
if(isset($_POST) && isset($_POST['login'])){
    $_SESSION['user']=$_POST['login'];
    $_SESSION['navigateur']=$_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip']=$_SERVER['REMOTE_ADDR'];
    echo "Vous etes connecté en tant que ".$_POST['login'];
}
?>
<br>
<a href="testCo.php">Test de co</a>