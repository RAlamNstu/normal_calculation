<!DOCTYPE html>
<html>
<head>
	<title>normal calculation</title>
</head>
<body>
<div class="main" style="padding:190px 278px">
	<?php
include "functions.php";
?>	

<h2>Normal calculator</h2>
<form action="" method="post">
	<table>
		<tr>
		<td><span style="color:green;font-weight:bold;font-size: 25px;">First number is :</span></td>
		<td><input type="number" name="num1"></td> 
	</tr>
	<tr>
		<td><span  style="color:green;font-weight: bold;font-size: 25px;">second number is :</span></td>
		<td><input type="number" name="num2"></td> 
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="calculation" value="calculate"/></td>
	</tr>
	</table>
</form>
<?php 
		if (isset($_POST['calculation'])) {
			# code...
			$numOne = $_POST['num1'];
			$numTwo = $_POST['num2'];
			if (empty($numOne) or empty($numTwo)) {
				# code...
				echo "<span style='color:red'>Field must not be empty</span>";
			} else{

			$cal = new calculation;
			$cal->add($numOne,$numTwo);
			$cal->subs($numOne,$numTwo);
			$cal->mul($numOne,$numTwo);
			$cal->div($numOne,$numTwo);
		}
	}

 ?>
</div>

</body>
</html>