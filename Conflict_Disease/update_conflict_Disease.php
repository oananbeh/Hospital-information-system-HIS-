<?php
include './inc/include.php';
include './inc/database.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>New Conflict</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$id_drugs=$_GET['id_Drugs'];
$Disease=$_GET['Disease'];
$Drugs=new db('Drugs');
$show_Drugs=$Drugs->show();
$Drugs_selected=new db('Drugs');

$conflict=new db('Conflict_Disease');
$column['Id_Drugs']=$id_drugs;
$column['Disease']=$Disease;
$conflict_r= $conflict->show_multi($column);//show ubdate data
$cond['Id_Drugs']=$id_drugs;
$cond['Disease']=$Disease;
     
if(isset($_POST['add']))//if user click save
   { 
     $column['Id_Drugs']=$_POST['Drugs'];
     $column['Disease']=strtolower($_POST['Disease']);
     $column['Conflict']=$_POST['case'];

    $db=new db('Conflict_Disease'); //new object 
    $result= $db->updateMulti($column, $cond);
 if($result) //if exsist 
 {
   echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Insert New ?conflict ok.
                            </div>';
 }
 else // else insert new user
 {
             echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Error Duplicate key
      </div>';

 }
    }

?>

  <body>  
    
      
      <div id="div-1" class="accordion-body collapse in body">
          <form name="register" method="POST" action="index.php?page=update_conflict_Disease&id_Drugs=<?php echo $id_drugs?>&Disease=<?php echo $Disease;?>" class="form-horizontal">



                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-2">Drugs</label>

                    <div class="col-lg-8">
                         <select name="Drugs" class="form-control">
                              <option selected="" value="<?php  $show_Drugs_selected=$Drugs_selected->showby('Id_Drugs',$id_drugs); echo $show_Drugs_selected[0]['ID_Drugs']; ?>"><?php 
                                                           echo $show_Drugs_selected[0]['Name_Deugs'];   ?></option>

                             <?php for($i=0;$i<count($show_Drugs);$i++){?>
                             <option value="<?php echo $show_Drugs[$i]['ID_Drugs']; ?>"><?php echo $show_Drugs[$i]['Name_Deugs']; ?></option>
                             <?php } ?>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="text4" class="control-label col-lg-2">Drugs Conflict</label>

                    <div class="col-lg-8">
                        <input type="text" name="Disease" value="<?php echo $conflict_r[0]['Disease']  ?>"/>
                    </div>
                </div>             

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-2">case</label>

                    <div class="col-lg-8">
                        <textarea name="case" class="form-control" ><?php echo $conflict_r[0]['Conflict'] ?></textarea>
                    </div>
                </div>
            
             
                </div>
             <div class="form-group">
                       <label for="tags" class="control-label col-lg-2"> </label>

                    <div class="col-lg-4">
                        <input type="submit" name="add"  value="Save" class="btn btn-success btn-lg btn-line" />
                   
                       <input type="reset" name="Reset"  value="Reset" class="btn btn-info btn-lg btn-line" />
                    
                 <a href="index.php?page=view_conflict_update_Disease" class="btn btn-danger btn-lg btn-line">Exit</a>
                    </div>
                </div>
            </form>
          
        </div>
            <script src="./assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="./assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="./assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
</body>
</html>