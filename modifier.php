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
$res= mysql_query("select * from livre where id_liv=='$id'");

if(mysql_num_rows($res)==0 ){
    die("echec");
    }
    else { mysql_query("update livre set nom_liv='$nom' where id_liv=='$id' ");}

// Deconnexion de la base de donnees
mysql_close();


?>