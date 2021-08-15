<?php
    include("./Model/db_config.php");
    session_start();
    $id=$_SESSION['id'];
    $prev_password="";
    $prev_password_error="";
    $password1="";
    $password1_error="";
    $password2="";
    $password2_error="";
    $err_message="";
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

        if(!$hasError)
        {
            $query="SELECT password from `user` where id='$id'";
            $p_pass=get($query);
            $p_pass=$p_pass[0]['password'];
            if($p_pass == $prev_password)
            {
                $query="UPDATE `user` SET password='$password2' WHERE id='$id'";
                $result=execute($query);
                if($result==true)
                {
                    header("Location: _home.php");
                }
                else{
                    print_r($result);
                }
            }
            else{
                $err_message="You Have Entered  Wrong Current Password";
            }
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Password Change</title>
    </head>
    <body>
        <?php
            include("./header.php");
            echo "<div class='err'>".$err_message."</div>";
        ?>
        <div class="form_container">
            <form method="POST">
                    <h2>Password Change</h2>
                    <table>
                        <tr>
                            <td align="left"><b>Edit Password</b></td>
                        </tr>
                        <tr>
                            <td align="left">Previous Password</td>
                            <td>:<input type="password" name="prev_password" value="<?php echo $prev_password ?>"></td>
                            <td><?php echo $prev_password_error ?></td>
                        </tr>
                        <tr>
                            <td align="left">New Password</td>
                            <td>:<input type="password" name="password1" value="<?php echo $password1 ?>"></td>
                            <td><?php echo $password1_error ?></td>
                        </tr>
                        <tr>
                            <td align="left">Confirm new Password</td>
                            <td>:<input type="password" name="password2" value="<?php echo $password2 ?>"></td>
                            <td><?php echo $password2_error ?></td>
                        </tr>
                        <tr>
                            <td>
                            <input class="btn" type="submit" value="Change">
                            </td>
                        </tr>
                    </table>
            </form>
        </div>
    </body>
</html>