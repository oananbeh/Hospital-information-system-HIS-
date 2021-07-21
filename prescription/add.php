<?php
@session_start();
if(isset($_SESSION['UserID']))
{
    $userId=$_SESSION['UserID'];
}

include './inc/include.php';
include './inc/database.php';
$day=date("Y-m-d"); //get curent date
$db_add=new db('prescription'); //new object from db
 $id=$_POST['id'];   //get id_drugs send from new prescription
 $id_a=$_POST['id_a']; // get id_drugs (Next) send from new prescription
 if($id_a=='')
 {
     $id_a=0;
 }
 $Disease=$_POST['Disease']; //get conflict Disease
 
 if($Disease=='')
 {
     $Disease=0;
 }
$Drugs_name=new db('Drugs');
 
//check conflect Disease
$sql2="select * from Conflict_Disease where Id_Drugs='$id' and `Disease`IN($Disease)";
$query=  mysqli_query($link, $sql2);
if(mysqli_num_rows($query)>=1)
    { 
    while($res=mysqli_fetch_array($query))
        {
        echo 'conflict'.','.' can not for a '.$res['Disease'].' taking this drug'."\nCases:\n".$res['Conflict']."\n";         
        }
    }//end conflect Disease
else 
    {
          //Conflict with tow Drugs 
          $sql="select * from Conflict where Id_Drugs IN($id_a) AND Id_Drugs_conflict='$id'";
          $r=  mysqli_query($link, $sql);
          $f=  mysqli_fetch_array($r);
          if(mysqli_num_rows($r)>=1)
              {     
             $D=$Drugs_name->showby('ID_Drugs',$id_a);
               echo 'conflict'.','.'With'.$D[0]['Name_Deugs']."\nCases:\n".$f['Conflict']."\n";         
              }
         else  //Conflict with tow Drugs  reverse
             {
          $sql1="select * from Conflict where Id_Drugs='$id' AND Id_Drugs_conflict IN($id_a)";
          $r1=  mysqli_query($link, $sql1);
          $f1=  mysqli_fetch_array($r1);
          if(mysqli_num_rows($r1)>=1)
              { $D=$Drugs_name->showby('ID_Drugs',$id_a);

                  echo 'conflict'.','.'With'.$D[0]['Name_Deugs']."\nCases:\n".$f['Conflict']."\n";         
   
              }
            else //if no Conflict
            {
             
          $db=new db('Drugs');
          $data['Id_User']=$userId;
          $data['Id_Drugs']=$id;
          $data['Date_Prescription']=$day;
          if($array =$db->showby('ID_Drugs', $id))
              { 
            $array =$db->showby('ID_Drugs', $id);
            echo $array[0]['ID_Drugs'].','.$array[0]['Name_Deugs'].','.$array[0]['Dosage_Taype'].','.$array[0]['Dosage_Form'].','.$array[0]['Quantity'];
            $db_add->insert($data);  
             }
 else { //if data Not found 
               
              echo "Not";
       }
       

 }
 }
  }

?>
