<?php

 
include './inc/include.php';

if(isset($_GET['Id_Drugs']))
{
    $Id_Drugs=$_GET['Id_Drugs'];
    $Disease=$_GET['Disease'];
   $sql="Delete from Conflict_Disease where Id_Drugs='$Id_Drugs' and Disease='$Disease'";
  $result= mysqli_query($link, $sql);
   
   
}
?>﻿
<body >

    

            <div class="kkk">
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                        <tr>
                                            <th>Name Drugs</th>
                                            <th>Disease</th>
                                            <th>Conflict</th>
                                            <th>update</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                          <?php
                                        include './inc/database.php';
                                        include './inc/include.php';
                                        $db=new db("Conflict_Disease");
                                        $show=$db->show();
                                        if(count($show)>=1)
                                        {
                                            $drugs_name=new db('Drugs');
                                        for($i=0;$i<count($show);$i++)//fetch data
                                          {
                                             $d=$drugs_name->showby('ID_Drugs', $show[$i]['Id_Drugs']);
                                            echo'<tr class="odd gradeX">';
                                            echo'<td>'.$d[0]['Name_Deugs'].'</td>';
                                            echo'<td>'.$show[$i]['Disease'].'</td>';
                                            echo'<td>'.$show[$i]['Conflict'].'</td>';
                                            
                                            echo'<td><a onclick="'.'return confirm('."'".'Do you want to delete this User ?'."'".')" href="index.php?page=view_conflict_delete_Disease&Id_Drugs='.$show[$i]['Id_Drugs'].'&Disease='.$show[$i]['Disease'].'" class="btn btn-default btn-circle btn-lg btn-danger"><i class="icon-check"></i></a></td>';

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

