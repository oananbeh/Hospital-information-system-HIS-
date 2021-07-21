<?php
include './inc/include.php';
include './inc/database.php';
?>
<!DOCTYPE html>

<html lang="en"> 


<head>
   
     <meta charset="UTF-8" />
    <title>Update</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
     
</head>
<?php

if(isset($_POST['add']))//if user click save
   {
    $id=$_GET['id_user'];
    $db=new db('Users'); //new object 
  
     $data['SNN']=$_POST['SNN'];
     $data['Name']=$_POST['Name'];
     $data['Address']=$_POST['Address'];
     $data['birthday']=$_POST['birthday'];
     $data['Id_insurance']=$_POST['Id_insurance'];
     $data['Type_insurance']=$_POST['Type_insurance'];
     $data['Degree_insurance']=$_POST['Degree_insurance'];
     $data['Phone']=$_POST['Phone'];
     $data['Email']=$_POST['Email'];
     $data['Disease']=strtolower($_POST['Disease']);
     $update=$db->update($data, 'Id', $id); //update information
     
     if($update) //if update ok 
     {   echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Update User ok.
                            </div>';
        
           }
      else {
         
             
        echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Error Update
      </div>';
               }
 }
  if(isset($_GET['id_user']))
{
 $db=new db('Users'); //new object 
$id=$_GET['id_user']; //Get id of user from url
$result=$db->showby('Id', $id); // show information of user 

}  

?>

  <body>  
    
      
      <div id="div-1" class="accordion-body collapse in body">
          <form name="register" method="POST" action="index.php?page=update_user&id_user=<?php echo $id;  ?>" class="form-horizontal">
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-2">SSN</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="number" name="SNN" value="<?php echo $result[0]['SNN']; ?>" required=""/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-2">Patient Name</label>

                    <div class="col-lg-8">
                        <input type="text" name="Name" value="<?php echo $result[0]['Name']; ?>" required class="form-control" />
                    </div>
                </div>

               

                <div class="form-group">
                    <label class="control-label col-lg-2">Address</label>

                    <div class="col-lg-8">
                        <input type="text" name="Address" value="<?php echo $result[0]['Address']; ?>" required="" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">birthday</label>

                    <div class="col-lg-8">
                        <input type="date" name="birthday" required="" value="<?php echo $result[0]['birthday']; ?>"  class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">Id Insurance</label>

                    <div class="col-lg-8">
                        <input type="number" name="Id_insurance" value="<?php echo $result[0]['Id_insurance']; ?>" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-2">Type Insurance</label>

                    <div class="col-lg-8">
                        <select name="Type_insurance" class="form-control">
                            <option selected=""><?php echo $result[0]['Type_insurance']; ?></option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="text4" class="control-label col-lg-2">Degree Insurance</label>

                    <div class="col-lg-8">
                         <select name="Degree_insurance" class="form-control">
                             <option selected=""><?php echo $result[0]['Degree_insurance']; ?></option>
                            
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>
                </div>             

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Phone</label>

                    <div class="col-lg-8">
                        <input name="Phone" type="tel"  required=""  value="<?php echo $result[0]['Phone']; ?>" class="form-control" />
                    </div>
                </div>
                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Email</label>

                    <div class="col-lg-8">
                        <input name="Email" type="email" value="<?php echo $result[0]['Email']; ?>"  required="" class="form-control" />
                    </div>
                </div>
                                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Disease</label>

                    <div class="col-lg-8">
                        <input name="Disease" type="text"  value="<?php echo $result[0]['Disease']; ?>"  required="" class="form-control" />
                    </div>
                </div>
                                                 
             <div class="form-group">
                       <label for="tags" class="control-label col-lg-2"> </label>

                    <div class="col-lg-4">
                        <input type="submit" name="add"  value="Save" class="btn btn-success btn-lg btn-line" />
                   
                       
                 <a href="index.php?page=view_user_update" class="btn btn-danger btn-lg btn-line">Exit</a>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>