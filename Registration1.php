<?php 
	$user_name="";
	$user_name_error="";
	$first_name="";
	$first_name_error="";
	$last_name="";
	$last_name_error="";
	$email="";
	$email_error="";
	$password1="";
	$password1_error="";
	$password2="";
	$password2_error="";
	$hasError=false;

	function checkSpecialChar($str) {
        $len=strlen($str);
		for($i=0;$i<$len;$i++)
		{
			if($str[$i]=='#')
			{
				return true;
			}
		}
        return false;
	}

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(empty($_POST['user_name']))
		{
			$hasError=true;
			$user_name_error="Field Is Required";
		}
		elseif(strlen($_POST['user_name'])<5)
		{
			$hasError=true;
			$user_name_error="Username must be greater then 5";
		}
		else
		{
			$user_name=$_POST['user_name'];
		}

		if(empty($_POST['first_name']))
		{
			$hasError=true;
			$first_name_error="Field Can Not Be Empty";
		}
		else
		{
			$first_name=$_POST['first_name'];
		}

		if(empty($_POST['last_name']))
		{
			$hasError=true;
			$last_name_error="Field Can Not Be Empty";
		}
		else
		{
			$last_name=$_POST['last_name'];
		}

		if(empty($_POST['email']))
		{
			$hasError=true;
			$email_error="Field Can Not Be Empty";
		}
		elseif(!(strpos($_POST["email"],"@")>0) and !(strpos($_POST["email"],".")>0))
		{
			$hasError=true;
			$email_error="Email Must Contain '@' and '.'";
		}
		else
		{
			$email=$_POST['email'];
		}

		if(empty($_POST['password1']) or empty($_POST['password2']))
		{
			$hasError=true;
			$password1_error="Field Can Not Be Empty";
		}
		elseif((strlen($_POST['password1'])<6) or (strlen($_POST['password2'])<6))
		{
			$hasError=true;
			$password1_error="Password must be greater then 6";
		}
		elseif(!checkSpecialChar($_POST['password1']))
		{
			$hasError=true;
			$password1_error="Password must Contain special Char";
		}
		elseif(!checkSpecialChar($_POST['password2']))
		{
			$hasError=true;
			$password1_error="Password must Contain special Char";
		}
		elseif($_POST['password1']!=$_POST['password2'])
		{
			$hasError=true;
			$password2_error="Password Dose not Match";
		}
		else{
			$password1=$_POST['password1'];
			$password2=$_POST['password2'];
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
				echo $user_name."<br>"; 
				echo $first_name."<br>";
				echo $last_name."<br>";
				echo $email."<br>";
				echo $password1."<br>";
				echo $password2."<br>";     
			} 
		?>
		<table style="border:2px solid black">
			<tr>
				<td><b>Step 1 > </b></td>
				<td>Step 2 > </td>
				<td>Step 4 > </td>
				<td>Step 4 > </td>
				<td>Step 5 > </td>
				<td>Step 6 > </td>
			</tr>
		</table>
		<form action="" method="POST">
			<fieldset>
				<legend><h2>Personal Info</h2></legend>
				<table align="center">
					<tr>
						<td>Username:</td>
						<td><input type="text" name="user_name" placeholder="Username" value="<?php echo $user_name ?>"></td>
						<td><?php echo $user_name_error ?></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name ?>"></td>
						<td><?php echo $first_name_error ?></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name ?>"></td>
						<td><?php echo $last_name_error ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" placeholder="Email" value="<?php echo $email ?>"></td>
						<td><?php echo $email_error ?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password1" placeholder="Password" value="<?php echo $password1 ?>"></td>
						<td><?php echo $password1_error ?></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" name="password2" placeholder="Confirm Password" value="<?php echo $password2 ?>"></td>
						<td><?php echo $password2_error ?></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
<<<<<<< HEAD:Registration_form_1.php
		<a href="./Registration_form_2.php"><button>Next</button></a>
=======
		<a href="./Registration2.php"><button>Next</button></a>
>>>>>>> 46d10211ce893de91de2a967bfb85e3cd72f98c3:Registration1.php
	</body>
</html>


