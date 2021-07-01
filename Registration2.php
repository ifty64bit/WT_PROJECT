<?php 
	$house="";
	$house_error="";
	$road="";
	$road_error="";
	$block="";
	$block_error="";
	$division="";
	$division_error="";
	$district="";
	$district_error="";
	$gender="";
	$gender_error="";
	$birth_day="";
	$birth_day_error="";
    $birth_month="";
	$birth_month_error="";
    $birth_year="";
	$birth_year_error="";
	$phone="";
	$phone_error="";
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["house"]))
        {
            $hasError=true;
            $house_error="Field can not be Empty";
        }
        else{
            $house=$_POST["house"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $road_error="Field can not be Empty";
        }
        else{
            $road=$_POST["road"];
        }

        if(empty($_POST["block"]))
        {
            $hasError=true;
            $block_error="Field can not be Empty";
        }
        else{
            $block=$_POST["block"];
        }

		if(empty(($_POST["division"])))
        {
            $hasError=true;
            $division_error="Select Your Division";
        }
        else{
            $division=$_POST["division"];
        }

		if(empty($_POST["district"]))
        {
            $hasError=true;
            $district_error="Select Your District";
        }
        else{
            $district=$_POST["district"];
        }

		if(empty($_POST["gender"]))
        {
            $hasError=true;
            $gender_error="Field can not be Empty";
        }
        else{
            $gender=$_POST["gender"];
        }

		if(empty($_POST["day"]))
        {
            $hasError=true;
            $day_error="Field can not be Empty";
        }
        else{
            $birth_day=$_POST["day"];
			
        }

		if(empty($_POST["month"]))
        {
            $hasError=true;
            $birth_month_error="Field can not be Empty";
        }
        else{
            $birth_month=$_POST["month"];
        }

		if(empty($_POST["year"]))
        {
            $hasError=true;
            $birth_year_error="Field can not be Empty";
        }
        else{
            $birth_year=$_POST["year"];
        }

		if(empty($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Field can not be Empty";
        }
		elseif(!is_numeric($_POST['phone']))
		{
			$hasError=true;
            $phone_error="Field Must Be Numaric";
		}
        else{
            $phone=$_POST["phone"];
        }

	}
?>
<html>
	<head>
	<title>Sign Up</title>
	</head>
	<body>
	<?php
		if(!$hasError)
		{
			echo $house."<br>";
			echo $road."<br>";
			echo $house."<br>";
			echo $block."<br>";
			echo $division."<br>";
			echo $district."<br>";
			echo $gender."<br>";
			echo $birth_day."<br>";
			echo $birth_month."<br>";
			echo $birth_year."<br>";
			echo $phone."<br>";
		}
	?>
	<table style="border:2px solid black">
			<tr>
				<td>Step 1 > </td>
				<td><b>Step 2 > </b></td>
				<td>Step 4 > </td>
				<td>Step 4 > </td>
				<td>Step 5 > </td>
				<td>Step 6 > </td>
			</tr>
		</table>
		<form method="POST">
			<table align="center">
				<tr>
					<td><u>Address Information:</u></td>
				</tr>
				<tr>
					<td>&nbsp; House No.:</td>
					<td><input type="text" name="house" placeholder="House No." value="<?php echo $house ?>"></td>
					<td><?php echo $house_error ?></td>
				</tr>
				<tr>
					<td>&nbsp; Road No.:</td>
					<td><input type="text" name="road" placeholder="Road No." value="<?php echo $road ?>"></td>
					<td><?php echo $road_error ?></td>
				</tr>
				<tr>
					<td>&nbsp; Block No.:</td>
					<td><input type="text" name="block" placeholder="Block No." value="<?php echo $block ?>"></td>
					<td><?php echo $block_error ?></td>
				</tr>
				<tr>
				<td><br>Division:</td>
				<td><br><select name="division">
						<option value="---" selected disabled>--Select--</option>
						<option <?php echo $division=='dhaka'?"selected":"" ?> value="dhaka">Dhaka</option>
						<option <?php echo $division=='ctg'?"selected":"" ?> value="ctg">Chittagong</option>
						<option <?php echo $division=='sylhet'?"selected":"" ?> value="sylhet">Sylhet</option>
					</select>
				</td>
				<td><?php  ?></td>
				</tr>
				<tr>
					<td>District:</td>
					<td><select name="district">
						<option value="---" selected disabled>--Select--</option>
						<option <?php echo $district=='gazipur'?"selected":"" ?> value="gazipur">Gazipur</option>
						<option <?php echo $district=='gopalganj'?"selected":"" ?> value="gopalganj">Gopalganj</option>
						<option <?php echo $district=='kisorganj'?"selected":"" ?> value="kisorganj">Kishoreganj</option>
					</select>
					</td>
					<td><?php echo $district_error ?></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="male" <?php echo $gender=='male'?"checked":'' ?>>Male<input type="radio" name="gender" value="female" <?php echo $gender=='female'?"checked":'' ?>>Female</td>
					<td><?php echo $gender_error ?></td>
				</tr>
					<td>Date of Birth:</td>
                	<td>
						<?php echo $birth_day; ?>
                        <span>Day</span>
                        <select name="day" id="day">
                                <?php for($i=1;$i<=31;$i++){ echo "<option value='$i' ", $birth_day==$i?'selected':'',">$i</option>"; } ?>
                        </select> 
                        <span>Month</span>
                        <select name="month" id="month">
                                <?php for($i=1;$i<=12;$i++){ echo "<option value='$i' ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
                        </select> <br>
                        <span>Year</span>
                        <select name="year" id="year">
                                <?php for($i=1990;$i<=2008;$i++){ echo "<option value='$i' ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
                        </select>
                    </td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone ?>"></td>
					<td><?php echo $phone_error ?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</form>
		<a href="./registration3.php"><button>Next</button></a>
	</body>
</html>



