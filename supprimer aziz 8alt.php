<?php
$num=$_POST['num'];
mysql_connect('localhost','root','');
mysql_select_db('formation');
mysql_querry('delete from inscription where num = $num');
if(mysql_affected_rows() == -1){echo'suppression echouee';}
else{echo'succes';}
mysql_close()
