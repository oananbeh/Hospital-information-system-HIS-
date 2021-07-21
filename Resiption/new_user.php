<?php
include './inc/include.php';
include './inc/database.php';
?>

<html lang="en"> 

<head>
   
     <meta charset="UTF-8" />
    <title>New User</title>
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
    $db=new db('Users'); //new object 
    $result=$db->check("SNN", $_POST['SNN']); // check if SNN Exsest 
 if($result) //if exsist 
 {
    echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      This user is exsist.
      </div>';
 }
 else // else insert new user
 {   $r='';
 if(isset($_POST['Disease']))
 {
     for($i=0;$i<count($_POST['Disease']);$i++)
     {
         $r.= $_POST['Disease'][$i].',';
         }
         $format="+/*";
         $r.= $format;
         $r=  str_replace(",".$format, " ", $r);
 }
 else {
          $r="'"."null"."'";    
 }
     $data['Disease']=$r;
     $data['SNN']=$_POST['SNN'];
     $data['Name']=$_POST['Name'];
     $data['Address']=$_POST['Address'];
     $data['birthday']=$_POST['birthday'];
     $data['Id_insurance']=$_POST['Id_insurance'];
     $data['Type_insurance']=$_POST['Type_insurance'];
     $data['Degree_insurance']=$_POST['Degree_insurance'];
     $data['Phone']=$_POST['Phone'];
     $data['Email']=$_POST['Email'];
     $insert=$db->insert($data);
     if($insert)
     {   echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Insert New ?User ok.
                            </div>';
        
           }
      else {
         
             
        echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Error insert
      </div>';
               }
 }
    }

?>

  <body>  
    
      
      <div id="div-1" class="accordion-body collapse in body">
          <form name="register" method="POST" action="index.php?page=new_user" class="form-horizontal">
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-2">SSN</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="number" name="SNN" placeholder="SNN" required=""/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-2">Patient Name</label>

                    <div class="col-lg-8">
                        <input type="text" name="Name" placeholder="Patient Name ex Ahmad ali " required class="form-control" />
                    </div>
                </div>

               

                <div class="form-group">
                    <label class="control-label col-lg-2">Address</label>

                    <div class="col-lg-8">
                        <input type="text" name="Address" placeholder="Address" required="" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">birthday</label>

                    <div class="col-lg-8">
                        <input type="date" name="birthday" required=""  class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">Id Insurance</label>

                    <div class="col-lg-8">
                        <input type="number" name="Id_insurance" placeholder="Id Insurance ex 1025648" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-2">Type Insurance</label>

                    <div class="col-lg-8">
                        <select name="Type_insurance" class="form-control">
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
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>
                </div>             

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Phone</label>

                    <div class="col-lg-8">
                        <input name="Phone" type="tel"  required=""  placeholder="Phone Number ex 0772187589 "class="form-control" />
                    </div>
                </div>
                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Email</label>

                    <div class="col-lg-8">
                        <input name="Email" type="email" placeholder="Email ex abc@abc.com"  required="" class="form-control" />
                    </div>
                </div>
              <hr>
              <h3>Disease</h3>
              <br>
            <div class="form-group">
                    <label  class="control-label col-lg-2"> Diabetes</label>
                       <div class="col-lg-1">
                          <input type="checkbox" name="Disease[]" value="'Diabetes'" />
                    </div>
                    <label  class="control-label col-lg-2"> Pressure disease</label>
                      <div class="col-lg-1">
                      <input type="checkbox" name="Disease[]" value="'Pressure disease'" />    
                    </div>
                      <label class="control-label col-lg-2"> Pregnant</label>
                      <div class="col-lg-1">
                      <input type="checkbox" name="Disease[]" value="'Pregnant'" />    
                    </div>

                </div>
              <hr>
                  
             <div class="form-group">
                       <label for="tags" class="control-label col-lg-2"> </label>

                    <div class="col-lg-4">
                        <input type="submit" name="add"  value="Save" class="btn btn-success btn-lg btn-line" />
                   
                       <input type="reset" name="Reset"  value="Reset" class="btn btn-info btn-lg btn-line" />
                    
                 <a href="index.php?page=" class="btn btn-danger btn-lg btn-line">Exit</a>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>