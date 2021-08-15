<?php
    include('./Model/db_config.php');
    session_start();

    $id=$_SESSION['id'];
    $user=$_SESSION['uname'];
    $p_number="";
    $p_number_error="";
    $p_number2="";
    $p_number2_error="";
    $transc_amount="";
    $transc_amount_error="";
    $password="";
    $password_error="";
    $hasError=false;
    $status="ok";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['p_number']))
        {
            $hasError=true;
            $p_number_error="Field Can Not Be Empty";
        }
		elseif(!is_numeric($_POST['p_number']))
        {
            $hasError=true;
            $p_number_error="Phone Number Must Be Numaric";
        }
        else
		{	
            $p_number=$_POST['p_number'];
        }

        if(empty($_POST['p_number2']))
        {
            $hasError=true;
            $p_number2_error="Field Can Not Be Empty";
        }
		elseif(!is_numeric($_POST['p_number2']))
        {
            $hasError=true;
            $p_number2_error="Phone Number Must Be Numaric";
        }
        else
		{	
            $p_number2=$_POST['p_number2'];
        }

        if($p_number!=$p_number2)
        {
            $hasError=true;
            $p_number_error="Phone Number Dose Not Match";
            $p_number2_error="Phone Number Dose Not Match";
        }

        if(empty($_POST['transc_amount']))
        {
            $hasError=true;
            $tranc_amount_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['transc_amount']))
        {
            $hasError=true;
            $tranc_amount_error="This Field Must Be Numaric";
        }
        else{
            $transc_amount=$_POST['transc_amount'];
        }

        if(empty($_POST['password']))
        {
            $hasError=true;
            $password_error="Field Can Not Be Empty";
        }
        else
		{
            $password=$_POST['password'];
        }

        if(!$hasError)
        {
            $querry="SELECT acc_number,tran_limit,balance,password FROM account INNER Join `user` ON account.user_id=`user`.`id` where id='$id'";
            $res=get($querry)[0];
            $acc_number=$res['acc_number'];
            $trans_limit=$res['tran_limit'];
            $balance=$res['balance'];
            $pass=$res['password'];

            if($pass!=$password)
            {
                $status="w_p";
            }

            if($transc_amount>$trans_limit)
            {
                $status="e_l";
            }

            if($balance<$transc_amount)
            {
                $status="e_b";
            }

            if($status=='ok')
            {
                $new_bal=$balance-$transc_amount;
                $res1=execute("UPDATE account SET balance='$new_bal' WHERE user_id='$id'");
                $res2=execute("INSERT INTO transaction(t_from, t_from_acc, ammount, t_to, t_to_acc) VALUES('$user', '$acc_number', '$transc_amount', 'MOBILE_OUT', '$p_number')");
                if($res1 && $res2)
                {
                    $status="sent";
                }
            }
            $p_number="";
            $p_number2="";
            $transc_amount="";
            $password="";
        }
    }
?>
<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Send Money</title>
    </head>
    <body>
        <?php
            include('./header.php');
            if($status=="w_p")
            {
                echo "<div class='err'>Wrong Password!!!</div>";
            }
            elseif($status=="e_l")
            {
                echo "<div class='err'>Amount Exceeds Transaction Limit</div>";
            }
            elseif($status=="e_b")
            {
                echo "<div class='err'>Amount Exceeds Balance</div>";
            }
            elseif($status=="sent")
            {
                echo "<div class='pass'>Money Sent Succesfully. GO <a href='./_home.php'>Home</a></div>";
            }
        ?>
        <div class="form_container">
            <form action="" method="post"> 
                <table align="center" >
                    <tr> 
                        <td>Phone Number:</td> 
                        <td><input type="text" name="p_number" value="<?php echo $p_number ?>"></td>
                        <td><?php echo $p_number_error ?></td>
                    </tr>

                    <tr> 
                        <td>Enter Phone Number Again:</td> 
                        <td><input type="text" name="p_number2" value="<?php echo $p_number2 ?>"></td>
                        <td><?php echo $p_number2_error ?></td>
                    </tr>

                    <tr>
                        <td>Transaction Amount:</td> 
                        <td><input type="text" name="transc_amount" value="<?php echo $transc_amount ?>" ></td>
                        <td><?php echo $transc_amount_error ?></td>
                    </tr>

                    <tr>
                        <td>Password:</td> 
                        <td><input type="Password" name="password" value="<?php echo $password ?>"></td>
                        <td><?php echo $password_error ?></td> 
                    </tr>

                    <tr> 
                        <td> 
                            <input class="btn" type="submit" value="Cash Out">
                        </td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>