<?php
try
{
	// On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'user', 'user');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

if (isset ($_POST['ville']) AND ($_POST['haut']) AND ($_POST['bas'])){
    $ville=$_POST['ville'];
    $haut=$_POST['haut'];
    $bas=$_POST['bas'];
    $supp=$_POST['supp'];
        if(isset ($supp)){
    $bdd->exec("DELETE FROM Météo WHERE ville='$ville");}
};

?>

<!DOCTYPE html>

<body>
<a href="http://localhost/PHP/DB/Test/"> Retour </a>
</body>