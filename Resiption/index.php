<!DOCTYPE html>

<html lang="en"> 

<head>
   
     <meta charset="UTF-8" />
    <title>Resiption</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                     Pharmacy System

                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Mohammed</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

    <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="index.html" >
                        <i class="icon-table"></i> Home Page
	   
                       
                    </a>                   
                </li>



          <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> patient     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="index.php?page=new_user"><i class="icon-angle-right"></i> New  </a></li>
                         <li class=""><a href="index.php?page=view_user_update"><i class="icon-angle-right"></i> Update </a></li>
                        <li class=""><a href="index.php?page=view_user_delete"><i class="icon-angle-right"></i> Delete </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> prescriptions 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; 
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="../prescription/index.php?page=new_prescription"><i class="icon-angle-right"></i> new </a></li>
                        <li class=""><a href="../prescription/index.php?page=update"><i class="icon-angle-right"></i> update </a></li>
                        <li class=""><a href="forms_validation.html"><i class="icon-angle-right"></i> delete </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-drugs">
                        <i class="icon-pencil"></i> Drugs 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; 
                    </a>
                    <ul class="collapse" id="form-drugs">
                        <li class=""><a href="../Drugs/index.php?page=new_Drugs"><i class="icon-angle-right"></i> new </a></li>
                        <li class=""><a href="../Drugs/index.php?page=update_Drugs"><i class="icon-angle-right"></i> update </a></li>
                        <li class=""><a href="../Drugs/index.php?page=delete_Drugs"><i class="icon-angle-right"></i> delete </a></li>
                    </ul>
                </li>

             <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Conflict
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; 
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="../Conflict/index.php?page=new_conflict"><i class="icon-angle-right"></i> Add Conflict </a></li>
                        <li><a href="../Conflict/index.php?page=view_conflict_update"><i class="icon-angle-right"></i> update Conflict </a></li>
                        <li><a href="../Conflict/index.php?page=view_conflict_delete"><i class="icon-angle-right"></i> Delete Conflict </a></li>
                        
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-co">
                        <i class="icon-table"></i> Conflict Disease
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; 
                    </a>
                    <ul class="collapse" id="pagesr-co">
                        <li><a href="../Conflict_Disease/index.php?page=new_conflict_Disease"><i class="icon-angle-right"></i> Add Conflict Disease </a></li>
                        <li><a href="../Conflict_Disease/index.php?page=view_conflict_update_Disease"><i class="icon-angle-right"></i> update Conflict Disease </a></li>
                        <li><a href="../Conflict_Disease/index.php?page=view_conflict_delete_Disease"><i class="icon-angle-right"></i> Delete Conflict Disease </a></li>
                        
                    </ul>
                </li>



            </ul>


        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <h1> Reception Mange </h1>
                <hr>
                  <?php

   
   if (isset($_GET['page']))
   {
     $page=  $_GET['page'];
   }
   else {
       $page="";
   }
  switch ($page)
  {
      case '': ;
          break;
      case 'new_user':include 'new_user.php';
          break;
	  case 'view_user_update':include 'view_user_update.php';
          break;
      case 'view_user_delete':include 'view_user_delete.php';
          break;
      case 'update_user':include 'update_user.php';
          break;
      case 'error':include 'Error.php';
      break;
	case 'profile':include 'profile.php';
          break;
      
  }
   
   
   ?>


            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    
     <!-- For Tables -->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTablesUpdate-example').dataTable();
         });
    </script>
       
</body>
    <!-- END BODY-->
    
</html>
 