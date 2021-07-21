<?php

 
include './inc/include.php';

if(isset($_GET['Id_Drugs']))
{
    $Id_Drugs=$_GET['Id_Drugs'];
    $Id_Drugs_conflict=$_GET['Id_Drugs_conflict'];
   $sql="Delete from Conflict where Id_Drugs='$Id_Drugs' and Id_Drugs_conflict='$Id_Drugs_conflict'";
  $result= mysqli_query($link, $sql);
   
   
}
?>﻿
<body >

    

            <div class="kkk">
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                        <tr>
                                            <th>Name Drugs</th>
                                            <th>Name Drugs Conflict</th>
                                            <th>Conflict</th>
                                            <th>update</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                          <?php
                                        include './inc/database.php';
                                        include './inc/include.php';
                                        $db=new db("Conflict");
                                        $show=$db->show();
                                        if(count($show)>=1)
                                        {
                                            $drugs_name=new db('Drugs');
                                            $drugs_name_conflict=new db('Drugs');
                                        for($i=0;$i<count($show);$i++)//fetch data
                                          {
                                             $d=$drugs_name->showby('ID_Drugs', $show[$i]['Id_Drugs']);
                                             $d1=$drugs_name_conflict->showby('ID_Drugs', $show[$i]['Id_Drugs_conflict']);

                                            echo'<tr class="odd gradeX">';
                                            echo'<td>'.$d[0]['Name_Deugs'].$show[$i]['Id_Drugs'].'</td>';
                                            echo'<td>'.$d1[0]['Name_Deugs']. $show[$i]['Id_Drugs_conflict'].'</td>';
                                            echo'<td>'.$show[$i]['Conflict'].'</td>';
                                            
                                            echo'<td><a onclick="'.'return confirm('."'".'Do you want to delete this conflict ?'."'".')" href="index.php?page=view_conflict_delete&Id_Drugs='.$show[$i]['Id_Drugs'].'&Id_Drugs_conflict='.$show[$i]['Id_Drugs_conflict'].'" class="btn btn-default btn-circle btn-lg btn-danger"><i class="icon-check"></i></a></td>';

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

