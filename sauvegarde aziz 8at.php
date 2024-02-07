<?php
$num=$_POST['num'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ville=$_POST['ville'];
$email=$_POST['email'];
mysqli_connect('localhost','root','');
mysqli_select_db('formation');
$req="insert into inscription values('$num',$nom,$prenom,$ville,$email)"
mysqli_query('$req');
if(mysql_affected_rows()==-1){
    echo "inscription echoue";
}
else {
    echo "inscription reussi";
}
mysqli_close()
?>