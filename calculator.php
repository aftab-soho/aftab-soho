<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Calculator</title>
</head>

<body bgcolor="pink">
	
	<h1  style="color:blue;text-align:center;"> PHP SIMPLE CALCULATOR</h1>

		<form method="post">
					
				<label style= "display: block; margin-left: 500px;">Enter First Number:</label><br>
			<input type="text" style="align-items: center; margin-left: 500px;padding-left: 50px; padding-right: 50px"  ; name="fnum" placeholder="first number
			"  class="form-control"><br><br>
	
			<label style="display: block; margin-left: 500px;">Enter Second Number:</label><br>

			<input t
			ype="text" style="align-items: center; margin-left: 500px; padding-left: 50px; padding-right: 50px"" name="snum" placeholder="second number" class="form-control"><br><br>
			<p style=" margin-left: 500px;">Choose any Operator:</p>
			<select name="Operator" style="align-items: center; margin-left: 500px;padding-left: 50px; padding-right: 160px" class="form-control">
				<option>None</option>
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
				
			</select>
			<br>
			<input type="submit" style="background: green; color:whitesmoke;align-items: center; margin-left: 500px; padding: 10px;" name="submit" value="calculate" class="btn btn-success">

			<input type="submit" style="background: red; color:whitesmoke;padding: 10px;" name="reset" value="clear" class="btn btn-danger">
		</form>
		<br>
		
<h4 style="padding-left: 500px;">The Answer is:</h4><br>
		<div id="answer" style="background-color: #f4f4f4;padding: 30px; border-radius: 5px; text-align:center;">
		
		
	
		<?php
		if(isset($_POST['submit'])){

			$result1= $_POST['fnum'];
			$result2= $_POST['snum'];
			$sign= $_POST['Operator'];


			switch ($sign) {
				case 'None':
					echo "Please chose one operator";
						break;
						case '+':
							echo $result1+$result2;
							break;
							case '-':
								echo $result1-$result2;
								break;
								case '*':
									echo $result1*$result2;
									break;
									case '/':
										echo $result1/$result2;
										break;


				
					}
if(isset($_POST['clear'])){

			$result1= $_POST['fnum'];
			$result2= $_POST['snum'];
			$sign= $_POST['Operator'];


			switch ($sign) {
				case 'None':
					echo "Please chose one operator";
						break;
						case '+':
							echo $result1+$result2*0;
							break;
							case '-':
								echo $result1-$result2*0;
								break;
								case '*':
									echo $result1*$result2*0;
									break;
									case '/':
										echo $result1/$result2*0;
										break;


					
					

				
					
					}
					}
				}
					
		


		?>
	</div>

</body>
</html>