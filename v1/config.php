<?php

//mysql db and datatable config
    $servername='localhost'; //sql url adress
    $username='root'; //sql login name
    $password=''; //sql password
    $dbname = "web"; //sql database name
	  $dbPort = "3306"; //sql port default:3306
	  $dbtable = "contacts"; //sql datatable

    $conn=mysqli_connect($servername,$username,$password,$dbname,$dbPort);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
