<?php

include './inc/database.php';
include './inc/include.php';

if(isset($_GET['id_user']))
{
    $id=$_GET['id_user'];
   $db=new db('Users');
  $result= $db->deleteById('Id',$id);
   if($result)
   {
       
   }
}
?>﻿
<body>
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
                                            <th>ID</th>
                                            <th>SNN</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Birthday</th>
                                            <th>Id Insurance</th>
                                            <th>Type Insurance</th>
                                            <th>Degree Insurance</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                          
                                            <th>update</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                          <?php
                                        
                                        $db=new db("Users");
                                       
                                        $show=$db->show();
                                       
                                        if(count($show)>=1)
                                        {
                                        for($i=0;$i<count($show);$i++)//fetch data
                                          {
                                            echo'<tr class="odd gradeX">';
                                            echo'<td>'.$show[$i]['Id'].'</td>';
                                            echo'<td>'.$show[$i]['SNN'].'</td>';
                                            echo'<td>'.$show[$i]['Name'].'</td>';
                                            echo'<td>'.$show[$i]['Address'].'</td>';
                                            echo'<td>'.$show[$i]['birthday'].'</td>';
                                            echo'<td>'.$show[$i]['Id_insurance'].'</td>';
                                            echo'<td>'.$show[$i]['Type_insurance'].'</td>';
                                            echo'<td>'.$show[$i]['Degree_insurance'].'</td>';
                                            echo'<td>'.$show[$i]['Phone'].'</td>';
                                            echo'<td>'.$show[$i]['Email'].'</td>';
                                           
                                            echo'<td><a onclick="'.'return confirm('."'".'Do you want to delete this User ?'."'".')" href="index.php?page=view_user_delete&id_user='.$show[$i]['Id'].'" class="btn btn-default btn-circle btn-lg btn-danger"><i class="icon-check"></i></a></td>';
                                        }
                                        }
                                      
                                         
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

