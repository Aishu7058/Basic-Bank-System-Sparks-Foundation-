
<!DOCTYPE html>
<html>
<head lang="en" >

<meta charset="utf-8"> 
<link rel="stylesheet" type="text/css" href="assets/css/Styy.css">
	<title>Transfer Money</title>
</head>

<div class="design">
<div id="reg">
	<font size="50px" color="blue">
	<h1>Transfer Money</h1>
	</font>
	<hr style="margin-bottom: 20px">
	<p id="Question"></p>
		<div class="element">
			<form id=f1 name="form1" action="ins.php" method="POST">
			<center>
				<font size="3px" >

					<h2>From</h2>
			Enter Name:  <input type="text" name="txt1" id="ft1" class="t1_b" placeholder="Enter name" style="size: 30px"><br><br>
			Enter Account No:  <input type="text" name="txt2" id="ft2" class="t2_b" placeholder="Enter Acc No."><br><br>
			<br>
			<h2>To</h2>
			Enter Name:  <input type="text" name="fnm" id="tt1" class="t1_b" placeholder="Enter name" style="size: 30px"><br><br>
			Enter Account No:  <input type="text" name="fac" id="tt2" class="t2_b" placeholder="Enter Acc No."><br><br>
			Enter Amount:  <input type="text" name="fam" id="tt3" class="t2_b" placeholder="Enter Amount"><br><br><br><br>
		<input type="submit" name="btn" value="Transfer" id="b1" onclick="callRegister()" class="reg_button" style="color: blue"><br><br>
		</font>
		</center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;
		
	</form>

	</div>
</div>

<body>
	
<script type="text/javascript">
	function callRegister()
	{
		var name=document.getElementById("ft1").value;
		var rno=document.form1.ft2.value;
		var tnm=document.form1.tt1.value;
		var tac=document.form1.tt2.value;
		var tamt=document.form1.tt3.value;
		var rname=/^[a-zA-Z]+[a-zA-Z]+$/;
		var rrno=/^[1-9][2]/;
		var amt=/^[1-9][2]/;
		if((!rname.test(name)) && (!rname.test(tnm)) && (!rrno.test(rno)) && (!rrno.test(tac)) && (!rrno.test(tamt)))
		{
			alert("Invalid details...");
			self.location="MakeTrans.html";
		}
		else
		{
			alert("Money transfer success...");
			self.location="index.html";
		}
		
	}
</script>
</body>
</html>