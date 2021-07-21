<?php

include './inc/database.php';
include './inc/include.php';

if(isset($_GET['id_user']))
{
    $id=$_GET['id_user'];
   $db=new db('Users');
  $result= $db->deleteById($id);
   if($result)
   {
       
   }
}
