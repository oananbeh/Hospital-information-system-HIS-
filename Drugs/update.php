<?php
include './inc/include.php';
include './inc/database.php';
?>
<!DOCTYPE html>
 <html lang="en"> 

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>Update Drugs</title>
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
    $id=$_GET['id_drugs'];
    $db=new db('Drugs'); //new object 
  
     $data['ID_Drugs']=$_POST['ID_Drugs'];
     $data['Name_Deugs']=$_POST['Name_Drugs'];
     $data['Dosage_Taype']=$_POST['Dosage_Type'];
     $data['Dosage_Form']=$_POST['Dosage_Form'];
     $data['Product_Date']=$_POST['Product_Date'];
     $data['Expire_Date']=$_POST['Expire_Date'];
     $data['Id_Supplier']=$_POST['Id_Supplier'];
     $data['Quantity']=$_POST['Quantity'];
     $update=$db->update($data, 'ID_Drugs', $id); //update information
     
     if($update) //if update ok 
     {   echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Update Drugs ok.
                            </div>';
        
           }
      else {
         
             
        echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Error Update
      </div>';
               }
 }
  if(isset($_GET['id_drugs']))
{
 $db=new db('Drugs'); //new object 
$id=$_GET['id_drugs']; //Get id of user from url
$result=$db->showby('ID_Drugs', $id); // show information of user 

}  

?>

  <body>  
    
      
      <div id="div-1" class="accordion-body collapse in body">
          <form name="register" method="POST" action="index.php?page=update&id_drugs=<?php echo $id;  ?>" class="form-horizontal">
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-2">ID Drugs</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="number" name="ID_Drugs" value="<?php echo $result[0]['ID_Drugs']; ?>" required=""/>
                    </div>
                </div>
   
                <div class="form-group">
                    <label class="control-label col-lg-2">Name Drugs</label>

                    <div class="col-lg-8">
                        <input type="text" name="Name_Drugs" value="<?php echo $result[0]['Name_Deugs']; ?>" required="" class="form-control" />
                    </div>
                </div>
                  <div class="form-group">
                        <label for="limiter" class="control-label col-lg-2">Dosage Type</label>

            <div class="col-lg-8">
                        <select name="Dosage_Type" class="form-control">
                            <option selected=""><?php echo $result[0]['Dosage_Taype']; ?></option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                        
                    </div>
                </div>
                  <div class="form-group">
                        <label for="limiter" class="control-label col-lg-2">Dosage Form</label>

                  <div class="col-lg-8">
                        <select name="Dosage_Form" class="form-control">
                            <option selected=""><?php echo $result[0]['Dosage_Form']; ?></option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                        
                    </div>
                </div>           

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Product Date</label>

                    <div class="col-lg-8">
                        <input name="Product_Date" type="date"  required=""  value="<?php echo $result[0]['Product_Date']; ?>" class="form-control" />
                    </div>
                </div>
                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Expire Date</label>

                    <div class="col-lg-8">
                        <input name="Expire_Date" type="date" value="<?php echo $result[0]['Expire_Date']; ?>"  required="" class="form-control" />
                    </div>
                </div>
                                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">ID Supplier</label>

                    <div class="col-lg-8">
                        <input name="Id_Supplier" type="text"  value="<?php echo $result[0]['Id_Supplier']; ?>"  required="" class="form-control" />
                    </div>
                </div>
                                                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Quantity</label>

                    <div class="col-lg-8">
                        <input name="Quantity" type="text" value="<?php echo $result[0]['Quantity']; ?>" required="" class="form-control" />
                    </div>
                </div>
             <div class="form-group">
                       <label for="tags" class="control-label col-lg-2"> </label>

                    <div class="col-lg-4">
                        <input type="submit" name="add"  value="Save" class="btn btn-success btn-lg btn-line" />
                   
                       
                 <a href="index.php?page=update_Drugs" class="btn btn-danger btn-lg btn-line">Exit</a>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>