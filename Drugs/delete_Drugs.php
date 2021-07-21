<?php

 include './inc/database.php';
                                        include './inc/include.php';
if(isset($_GET['id_drugs']))
{
    $id=$_GET['id_drugs'];
   $db=new db('Drugs');
  $result= $db->deleteById('ID_Drugs',$id);
   if($result)
   {
       
   }
}
?>﻿
<body >

    

            <div class="kkk">
       


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All Drugs
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                        <tr>
            
                                            <th>ID Drugs</th>
                                            <th>Name Deugs</th>
                                            <th>Dosage Taype</th>
                                            <th>Dosage Form</th>
                                            <th>Product Date</th>
                                            <th>Expire Date</th>
                                            <th>ID Supplier</th>
                                            <th>Quantity</th>
                                            <th>update</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                          <?php
                                       
                                        $db=new db("Drugs");
                                        
                                        $show=$db->show();
                                        if(count($show)>=1)
                                        {
                                        for($i=0;$i<count($show);$i++)//fetch data
                                          {
                                            echo'<tr class="odd gradeX">';
                                            echo'<td>'.$show[$i]['ID_Drugs'].'</td>';
                                            echo'<td>'.$show[$i]['Name_Deugs'].'</td>';
                                            echo'<td>'.$show[$i]['Dosage_Taype'].'</td>';
                                            echo'<td>'.$show[$i]['Dosage_Form'].'</td>';
                                            echo'<td>'.$show[$i]['Product_Date'].'</td>';
                                            echo'<td>'.$show[$i]['Expire_Date'].'</td>';
                                            echo'<td>'.$show[$i]['Id_Supplier'].'</td>';
                                            echo'<td>'.$show[$i]['Quantity'].'</td>';
                                            echo'<td><a onclick="'.'return confirm('."'".'Do you want to delete this Drugs ?'."'".')" href="index.php?page=delete_Drugs&id_drugs='.$show[$i]['ID_Drugs'].'" class="btn btn-default btn-circle btn-lg btn-danger"><i class="icon-check"></i></a></td>';
                                        }}
                                      echo'  </tr>';
                                        ?>
                                         
                              
                                       
                              
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
                
            
            
                
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
     <!-- END PAGE LEVEL SCRIPTS -->
</body>

