<?php
session_start();
?>
<h1>Autre page</h1>
<?php
if(isset($_SESSION['user'])){
?>
    <h2>Utilisateur connecté :</h2>
    <p>
        Utilisateur : <?=$_SESSION['user']?><br>
        Navigateur : <?=$_SESSION['navigateur']?><br>
        Adresse IP : <?=$_SESSION['ip']?><br>
    </p>
<?php
}else{
    echo "<h2>Aucun utilisateur connecté</h2>";
}
?>
