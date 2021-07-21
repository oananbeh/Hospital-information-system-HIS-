<?php
include './inc/database.php';
include './inc/include.php';
?>
<!DOCTYPE html>

<html lang="en"> 

<head>
   
     <meta charset="UTF-8" />
    <title>New Drugs</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

    <link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/theme.css" />
    <link rel="stylesheet" href="./assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="./assets/plugins/Font-Awesome/css/font-awesome.css" />

    <script type="text/javascript" src="./inc/jquery.js"></script>

<script language="javascript" >
$(document).ready(function()
{
$('#Dosage_Type').change(function()//Name of select in html that change
{
	
var id=$(this).val(); //declare variable id and = to selected value 
var d='id='+id; //declare variable id=
$.ajax({type:"POST",url:"find_Dosage_Form.php",data:d,cache:false,success: function(ok)
{
    
	$('#Dosage_Form').html(ok);// add result into <tr> in html
	
}

});
});
});
</script>
</head>
<?php
if(isset($_POST['add']))//if user click save
   {
    $db=new db('Drugs'); //new object 
    $result=$db->check("ID_Drugs", $_POST['Id_Drugs']); // check if SNN Exsest 
 if($result) //if exsist 
 {
    echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      This Drugs is exsist.
      </div>';
 }
 else // else insert new user
 {
     $data['ID_Drugs']=$_POST['Id_Drugs'];
     $data['Name_Deugs']=$_POST['Name_Drugs'];
     $data['Dosage_Taype']=$_POST['Dosage_Type'];
     $data['Dosage_Form']=$_POST['Dosage_Form'];
     $data['Product_Date']=$_POST['Product_Date'];
     $data['Expire_Date']=$_POST['Expire_Date'];
     $data['Id_Supplier']=$_POST['Id_Supplier'];
     $data['Quantity']=$_POST['Quantity'];
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
          <form name="register" method="POST" action="index.php?page=new_Drugs" class="form-horizontal">
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-2">ID Drugs</label>

                    <div class="col-lg-8">
                        <input class="form-control" type="number" name="Id_Drugs" placeholder="Id_Drugs" required=""/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-2">Drugs Name</label>

                    <div class="col-lg-8">
                        <input type="text" name="Name_Drugs" placeholder=" Name Drugs " required class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-2">Dosage Type</label>

                    <div class="col-lg-8">
                        <select name="Dosage_Type" id="Dosage_Type" class="form-control">
                            <option>-----------</option>
                               <?php
                            $db=new db('Dosage_Type');
                            $result= $db->show();
                            for($i=0;$i<=count($result);$i++)
                            {
                            echo '<option value="'.$result[$i]['Dosage_Id'].'">'.$result[$i]['Dosage_Name'].'</option>';
                            }
                            ?>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="text4" class="control-label col-lg-2">Dosage Form</label>

                    <div class="col-lg-8">
                        <select name="Dosage_Form" id="Dosage_Form" class="form-control">
                         
                        </select>
                    </div>
                </div>             

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Product Date</label>

                    <div class="col-lg-8">
                        <input name="Product_Date" type="date"  required=""  placeholder="Product Date" class="form-control" />
                    </div>
                </div>
                 <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Expire Date</label>

                    <div class="col-lg-8">
                        <input name="Expire_Date" type="date" placeholder="Expire Date"  required="" class="form-control" />
                    </div>
                </div>
                  <div class="form-group">
                    <label for="text4" class="control-label col-lg-2">Supplier Name </label>

                    <div class="col-lg-8">
                         <select name="Id_Supplier" class="form-control">
                            <?php
                            $db=new db('Supplier');
                            $result= $db->show();
                            for($i=0;$i<=count($result);$i++)
                            {
                            echo '<option value="'.$result[$i]['Id_Supplier'].'">'.$result[$i]['Name_Supplier'].'</option>';
                            }
                            ?>
                            
                        </select>
                    </div>
                </div>  
                    <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">Quantity</label>

                    <div class="col-lg-8">
                        <input name="Quantity" type="number" placeholder="Quantity"  required="" class="form-control" />
                    </div>
                </div>
                
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