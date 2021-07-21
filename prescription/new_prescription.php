<?php
@session_start();
include './inc/include.php';
include './inc/database.php';
?>
<!DOCTYPE html>

 <html lang="en"> 

<head>
   
     <meta charset="UTF-8" />
    <title>New Prescription</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

    <link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/theme.css" />
    <link rel="stylesheet" href="./assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="./assets/plugins/Font-Awesome/css/font-awesome.css" />

	<link rel="stylesheet" href="./inc/themes/base/jquery.ui.all.css">
        <script src="./inc/jquery-1.8.0.js"></script>
	<script src="./inc/jquery.ui.core.js"></script>
	<script src="./inc/jquery.ui.widget.js"></script>
        <script src="./inc/jquery.ui.button.js"></script>
        <script src="./inc/jquery.ui.position.js"></script>
	<script src="./inc/jquery.ui.dialog.js"></script>

    <!-- drugs sucript -->
    <script>

	$(function() {

		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		
		var arr =new Array;
        var Disease =new Array;        

		
		$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true,
			buttons: {
				"find Drugs": function() {
                    Disease=[];//clere array 
                    $("input:checkbox[name=a]:checked").each(function()//get all checkbox selected
                      {
                          Disease.push($(this).val());//save into array
                           // add $(this).val() to your array
                          });
                         
                    var id = $( "#id" ).val();
                       
                  var data='id='+id+'&id_a='+arr+'&Disease='+Disease;
                
	$.ajax({
		type:"POST",url:"add.php",data:data,dataType:'text',cache:false,success: function a(result)
		{ 
						var dosage="<select><option>ml</option><option>gm</option><option>tab</option></select>";
                        var dosage2="<select><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option></select>";
						var repet="Repet<select><option>1</option><option>2</option></select>";
						var repetday="<select><option>Daily</option><option>Weekly</option><option>Monthly</option></select>";
						var quanity="<select><option>56tub</option><option>15tub</option></select>";
			           
   
            
        if(result=="Not")
            {
                alert("data not found");
            }
            
            if(result!="Not")
            {  
               var element_result= result.split(",");
                 if(element_result[0]=="conflict")
                 {
                     alert(result);
                   
                 }
                  else
                  {
				$( "#users tbody" ).append( "<tr>" +
					        "<td>"+element_result[1]+"</td>"+
							"<td>" + element_result[2] + "</td>" + 
							"<td>" + dosage2 +dosage+ "</td>" + 
							"<td>" + repet + repetday+"</td>" +
							"<td>"+element_result[3]+"</td>"+
							"<td>"+quanity+"</td>"+
						"</tr>" ); 
            
                    arr.push(element_result[0]); 
                $( "#id" ).val("");
            }
            }
            else
            { 
            
			
}

		}
		
	});
			$( this ).dialog( "close" );			
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});


		$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});

	});
	</script>
        
	<style>
		
		label, input { display:block; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 100%; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-dialog .ui-state-error { padding: .3em; }
		.validateTips { border: 1px solid transparent; padding: 0.3em; }
	</style>
    
<script>
printDivCSS = new String ('<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">')
printDivCSS2 = new String ('<style>div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }</style>')
function printDiv(divId) {
    window.frames["print_frame"].document.body.innerHTML=printDivCSS +printDivCSS2 + document.getElementById(divId).innerHTML;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

</head>
<?php

$divShow="hidden"; 
$re="dd";
if (isset( $_POST['search']))
{
   
   $db=new db('Users'); //new object 
   $result=$db->showby("Id", $_POST['Id']); // check if Id Exsest 
    
    if($result)
    {  @session_start();
        $_SESSION['UserID']=$_POST['Id'];
        $divShow=" visible";
        $re="visible"; 
       

    }
 else {
      $re="hidden";    
    }
}

?>

  <body>  
    
      
      <div id="div-1" class="accordion-body collapse in body">
          <form name="from1" method="POST" action="index.php?page=new_prescription" class="form-horizontal"   enctype="multipart/form-data" >
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-2">id patint</label>

                    <div class="col-lg-4">
                       <div class="form-group input-group">
                           <input type="text"  name="Id" class="form-control" />
                           <span class="input-group-btn">
                               <input name="search" value="Search" class="btn btn-default icon-search" type="submit"/>
                                               
                                            </span>
                                        </div>
                    </div>
                </div>
          
          <?php if ($re=="hidden") {
              echo' <div style=" visibility: <?php echo $alert; ?>;"class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      This User is not exsist
      </div>';
              
              
          }
?>
          </form>
          <div id="div1">
          <div class="panel-body" style="visibility: <?php echo $divShow; ?>;">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-2">Patient Name</label>

                    <div class="col-lg-4">
                        <input type="text" name="Name" value="<?php echo $result[0]['Name']; ?>" required class="form-control" />
                    </div>
                
                    <label class="control-label col-lg-2">SNN</label>

                    <div class="col-lg-4">
                        <input type="text" name="SNN" value="<?php echo $result[0]['SNN']; ?> " class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">Id Insurance</label>

                    <div class="col-lg-4">
                        <input type="text" name="Id_insurance" value="<?php echo $result[0]['Id_insurance']; ?> " class="form-control" />
                    </div>
               
                    <label for="limiter" class="control-label col-lg-2">Type Insurance</label>

                    <div class="col-lg-4">
                   <input type="text" name="type_insurance" value="<?php echo $result[0]['Type_insurance']; ?> " class="form-control" />

                        
                    </div>
                </div>
             
                <div class="form-group">
                    <label for="text4" class="control-label col-lg-2">Degree Insurance</label>

                    <div class="col-lg-4">
                    <input type="text" name="degree_insurance" value="<?php echo $result[0]['Degree_insurance']; ?> "  class="form-control" />

                    </div>
                </div>  
               <br>
              <br>
              <br>
              <br>
              <br>
               <h1>Disease</h1>
              <hr>
             
               <div class="form-group">
                    <label for="text2" class="control-label col-lg-1"> Diabetes</label>
                       <div class="col-lg-1">
                          <input type="checkbox" name="a" value="Diabetes" />
                    </div>
                    <label for="text2" class="control-label col-lg-2"> Pressure disease</label>
                      <div class="col-lg-1">
                      <input type="checkbox" name="a" value="Pressure disease" />    
                    </div>

                </div>
                 <!-- drugs body -->
                 
                 <div class="demo">

<div id="dialog-form" title="find Drugs">
	<p class="validateTips">Enter The ID of Drugs</p>

	<form>
	<fieldset>
		<label for="name">ID</label>
        <input type="text" name="id" id="id" class="text ui-widget-content ui-corner-all" />
        
	</fieldset>
	</form>
</div>
                     
                     <br>  <hr> <br>              

<div id="users-contain" class="ui-widget">
	<h1>infprmation:</h1>
    <button id="create-user" class="btn btn-default">Add Drugs</button>
	<table id="users" class="ui-widget ui-widget-content">
		<thead>
			<tr class="ui-widget-header ">
                <th>Drugs Name</th>
				<th>Dosage Type</th>
				<th>Dosage</th>
				<th>Repet</th>
				<th>Dosage Form</th>
				<th>Quntity</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				
			</tr>
		</tbody>
	</table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="form-group">
                       <label for="tags" class="control-label col-lg-2"> </label>

                    <div class="col-lg-4">
                       
                        <a href="javascript:printDiv('div1')" class="btn btn-danger btn-lg btn-line">Print</a>

                 <a href="index.php?page=" class="btn btn-danger btn-lg btn-line">Exit</a>
                    </div>
                </div>
</div>
              </div>
              <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

</div><!-- End demo -->

                 <!-- drugs body -->
          </div>

             
            </form>

        </div>
</body>
</html>