<?php

$host = 'localhost';
$user = 'root';
$bdd = 'bibliotheque';
$passwd = '';
$id = $_GET['id'];
$nom = $_GET['nom'];
$aut = $_GET['aut'];
$edi = $_GET['edi'];
$dat = $_GET['dat'];
// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");
// Connexion à la base
mysql_select_db($bdd) or die("erreur de connexion a la base de données");
// Creation et envoi de la requete
mysql_query("INSERT Into livre VALUES ('$id','$nom','$aut','$edi','$dat')");

if(mysql_affected_rows()==-1){
    die("echec");
    }
    else { echo"succes";}

// Deconnexion de la base de donnees
mysql_close();
?>



