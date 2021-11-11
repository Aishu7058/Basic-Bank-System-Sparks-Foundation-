		<?php
include("conn.php");
$res=mysqli_query($mysqli,"SELECT * FROM user");
$n=$a=$b=" ";
	if(isset($_POST['btn']))
	{
		echo "<b><br><center>Customers<br></b><br>";
		echo "<table border=0>";
		echo "<br><tr><th>Name</th> <th>Account No.</th> <th>Balance</th>";
		while($r=mysqli_fetch_array($res))
		{
			echo '<tr>';
			$n=$r[2];
			$a=$r[3];
			$b=$r[4];

			echo "<tr><td>".$n."</td><td>".$a."</td><td>".$b."</td>";
		}
		echo "</table></center>";
	}
	?>

	<style>
		table{
			border: 3px solid black;
			border-collapse: collapse;
		}
		td{
			padding: 15px;
			text-align: left;
			border: 2px solid black;
			font-size: 20px;
		}
		th{
			padding: 15px;
			text-align: left;
			border: 2px solid black;
			font-size: 25px;	
		}
	</style>
