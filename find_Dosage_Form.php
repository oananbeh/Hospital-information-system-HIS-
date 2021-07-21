<?php
include("./inc/include.php");
$id=$_POST['id'];
$sql="select * from Dosage_Form where  Dosage_Id='$id'";
$r=mysqli_query($link,$sql)or die(mysql_error($con)."Error");
while($row=mysqli_fetch_array($r))
{
	echo '<option>'.$row['Dosage_Form_Name'].'</option>';
}
?>