		<?php
include("conn.php");
	if(isset($_POST['btn']))
	{
		$fnm=$_POST['txt1'];
		$fac=$_POST['txt2']	;
		$tnm=$_POST['fnm'];
		$tac=$_POST['fac'];
		$tam=$_POST['fam'];
	}

	$res=mysqli_query($mysqli,"INSERT INTO user values('$fnm','$fac','$tnm','$tac','$tam')");
	if($res)
	{
		echo "Success";
		header("location:index.html");
	}
	else
	{
		echo "fail";
	}
	?>
			
