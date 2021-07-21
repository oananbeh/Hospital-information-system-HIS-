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
 
//users Disease
$user_Disease=new db('Users');
$result=$user_Disease->showby('Id',$userId);
$Disease = strtolower($result[0]['Disease']);
//End user Disease

$Drugs_name=new db('Drugs');
//check conflect Disease
$sql2="select * from Conflict_Disease where Id_Drugs='$id' and Disease IN($Disease)";
$query= mysqli_query($link, $sql2) ;
if(mysqli_num_rows($query)<>0)
    { 
    while($res=mysqli_fetch_array($query))
        {
      echo 'conflict'.','.' can not for a '.$res['Disease'].' taking this drug'."\nCases:\n".$res['Conflict']."\n";         
        
        
        }
        
    }//end conflect Disease
else 
    { //if no conflect Disease  
         $check=false;
          //check hestore of users
           $user_h=new db('prescription');
           $result_user=$user_h->showbyGroup('Id_User',$userId);
            if(count($result_user)>0)
	    {
           for($i=0;$i<count($result_user);$i++)
	       {  
          $re=$result_user[$i]['Id_Drugs'];
          $sql="select * from Conflict where Id_Drugs='$re' AND Id_Drugs_conflict='$id'";
          $r=  mysqli_query($link, $sql);
          $f=  mysqli_fetch_array($r);
          if(mysqli_num_rows($r)>=1)
              {     
             $D=$Drugs_name->showby('ID_Drugs',$re);
               echo 'conflict'.','.' With '.$D[0]['Name_Deugs']."\n you tack in Date:\n".$result_user[$i]['Date_Prescription']."\nCases:\n".$f['Conflict']."\n";         
              
		$check=true;
	      }
		 
	      }
	    } 

	     if($check==false)//vise virse
	     {
	   
	   $user_h=new db('prescription');
           $result_user=$user_h->showbyGroup('Id_User',$userId);
            if(count($result_user)>0)
	    {
           for($i=0;$i<count($result_user);$i++)
	       {  
          $re=$result_user[$i]['Id_Drugs'];
          $sql="select * from Conflict where Id_Drugs='$id' AND Id_Drugs_conflict='$re'";
          $r=  mysqli_query($link, $sql);
          $f=  mysqli_fetch_array($r);
          if(mysqli_num_rows($r)>=1)
              {     
             $D=$Drugs_name->showby('ID_Drugs',$re);
               echo 'conflict'.','.' With '.$D[0]['Name_Deugs']."\n you tack in Date:\n".$result_user[$i]['Date_Prescription']."\nCases:\n".$f['Conflict']."\n";         
	       $check=true;
              }
		 
	        }
	    }  //end check
             if($check==false)
	    {
	      
          //Conflict with tow Drugs 
          $sql="select * from Conflict where Id_Drugs IN($id_a) AND Id_Drugs_conflict='$id'";
          $r1=  mysqli_query($link, $sql);
          $f1=  mysqli_fetch_array($r1);
          if(mysqli_num_rows($r1)>=1)
              {     
             $D=$Drugs_name->showby('ID_Drugs',$id_a);
               echo 'conflict'.','.' With  '.$D[0]['Name_Deugs']."\nCases:\n".$f1['Conflict']."\n";         
              }
         else  //Conflict with tow Drugs  reverse
             {
          $sql1="select * from Conflict where Id_Drugs='$id' AND Id_Drugs_conflict IN($id_a)";
          $r2=  mysqli_query($link, $sql1);
          $f2=  mysqli_fetch_array($r2);
          if(mysqli_num_rows($r2)>=1)
              { $D1=$Drugs_name->showby('ID_Drugs',$id_a);

                  echo 'conflict'.','.' With  '.$D1[0]['Name_Deugs']."\nCases:\n".$f2['Conflict']."\n";         
   
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
            //dosage type name
            $dosage_name=new db('Dosage_Type');
            $dosage_name_type= $dosage_name->showby('Dosage_Id', $array[0]['Dosage_Taype']);
            //end
            echo $array[0]['ID_Drugs'].','.$array[0]['Name_Deugs'].','.$dosage_name_type[0]['Dosage_Name'].','.$array[0]['Dosage_Form'].','.$array[0]['Quantity'];
            $db_add->insert($data);  
             }
                else { //if data Not found 
               
                         echo "Not";
                          }
       

 }
 }
        
	     }
      
	     }
  }//end else cnflect Disease

?>
