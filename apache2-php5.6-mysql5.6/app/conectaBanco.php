<?php 

 $conn = mysqli_connect('db', 'user', 'user', 'exemplo');

 if($conn) {
 	echo "Conectou no banco de dados exemplo no SGBD MySQL no ambiente PHP 5.6";
 }
 

