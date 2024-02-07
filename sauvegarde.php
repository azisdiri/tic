<?php
$host = 'localhost';
$user = 'root';
$bdd = 'formation';
$passwd = '';
$num = $_POST['num'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ville = $_POST['ville'];
$email = $_POST['email'];
// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");
// Connexion à la base
mysql_select_db($bdd) or die("erreur de connexion a la base de données");
// Creation et envoi de la requete
mysql_query("INSERT Into inscription VALUES ('$num','$nom','$prenom','$ville','$email')");

if(mysql_affected_rows()==-1){
    die("La INSCRIPTION a echoue");
    }
    else { echo "AJOUT AVEC avec succes";}

// Deconnexion de la base de donnees
mysql_close();
?>
