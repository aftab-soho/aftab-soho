<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	div{
		width: 800px;
		background: antiquewhite;
		padding: 10px;
		margin-left: 100px;
		margin-right: 100px;
		margin-top: 0;
		margin-bottom: auto;
	}
	label{
		font-weight: bold;
		font-size: 18px;
	}
	span{
		font-size: 15px;
		color: gray;
	}
</style>

	




</head>
<body>
	<form action="process.php" method="post">
	<div>
		<h1>Student Registeration Form</h1>
	<p>Fill out this application form</p>

		<table border="0">
			<tr>
				<td>
					<label>
						Student name
					</label>
				</tr>
				<tr>
					<td>
						<input type="text" name="first_name">
						<br>
						<span>First name</span>
					</td>
					<td>
						<input type="text" name="middle_name">
						<br>
						<span>Middle name</span>
					</td>
					<td>
						<input type="text" name="last_name">
						<br>
						<span>Last name</span>
					</td>
				
				
				</tr>
				<tr>
					<td colspan="3">
						<table width="100%">
							<td>
								<label>Date of Birth
								</label>
							</td>
							<td>
								<label>Gender
								</label>
							</td>
							<tr>
								<td>
									<select name="month">
										<?php
										for($i=1; $i<=12; $i++)
										{

											?>
											<option value="<?php echo $i;?>">
												<?php echo $i;?>
											</option>
											<?php
										}
										?>
									</select>
									
									
									<select name="date">
										<?php
										for($i=1; $i<=31; $i++)
										{

											?>
											<option value="<?php echo $i;?>">
												<?php echo $i;?>
											</option>
											<?php
										}
										?>
									</select>
									


									<select name="year">
										<?php
										for($i=date('Y'); $i>=1960; $i--)
										{

											?>
											<option value="<?php echo $i;?>">
												<?php echo $i;?>
											</option>
											<?php
										}
										?>
									</select>
									<td>
										<select name="gender">
											<option value="male">Male</option>
											<option value="female" selected="select">Female</option>
										</select>
									</td>
									<tr>
										<td>
											<label>Address</label>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" name="street address" size="90%">
											<br>
										
										

											<span>Street Adress</span>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" name="street address line 2" size="90%">
											<br>

											<span>Street Adress Line 2</span>
										</td>
									</tr>
									<tr>
									<td colspan="3">
										<table width="100%">
									<td>
								<input type="text" name="city" size="37%">
								<br>
								<span>City</span>
							</td>
							<td>
								<input type="text" name="state" size="37%">
								<br>
								<span>State/Province</span>

								
							</td>
							


				
									
									






									










									<tr>
										<td>
											<input type="submit" value="register">
										</td>
									</tr>

									






										

										
							


							
							
						</table>

				




</body>
</html>