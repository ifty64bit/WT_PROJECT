<?php
    $prev_password="";
    $prev_password_error="";
    $password1="";
    $password1_error="";
    $password2="";
    $password2_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['prev_password']))
        {
            $hasError=true;
            $prev_password_error="You must enter your Previous Password";
        }
        else{
            $prev_password=$_POST['prev_password'];
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
		elseif(!(strpos($_POST['password1'],'#')>0) and !(strpos($_POST['password2'],'#')>0))
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
        <title>Password Change</title>
    </head>
    <body>
        <form method="POST">
            <fieldset>
                <legend><h2>Password Change</h2></legend>
                <table align="center">
                    <tr>
                        <td align="left"><b>Edit Password</b></td>
                    </tr>
                    <tr>
                        <td align="left">Previous Password</td>
                        <td>:<input type="text" name="prev_password" value="<?php echo $prev_password ?>"></td>
                        <td><?php echo $prev_password_error ?></td>
                    </tr>
                    <tr>
                        <td align="left">New Password</td>
                        <td>:<input type="text" name="password1" value="<?php echo $password1 ?>"></td>
                        <td><?php echo $password1_error ?></td>
                    </tr>
                    <tr>
                        <td align="left">Confirm new Password</td>
                        <td>:<input type="text" name="password2" value="<?php echo $password2 ?>"></td>
                        <td><?php echo $password2_error ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><button>Back</button>
                            <button>Confirm</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>