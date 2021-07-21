<?php
$host="localhost";
$user="root";
$password="";
$database="HIS";
$link=  mysqli_connect($host, $user, $password, $database)or die ("Error in conction");

mysqli_query($link,"set character set utf8");
mysqli_query($link,"SET character_set_client=utf8"); 
mysqli_query($link,"SET character_set_connection=utf8"); 
mysqli_query($link,"SET character_set_database=utf8"); 
mysqli_query($link,"SET character_set_results=utf8"); 
mysqli_query($link,"SET character_set_server=utf8");  


?>