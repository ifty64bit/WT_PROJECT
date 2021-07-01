<?php 
    
    $acc_number="";
    $acc_number_error="";
    $with_amount="";
    $with_amount_error="";
    $with_amount2="";
    $with_amount2_error="";
    $password="";
    $password_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        

        if(empty($_POST['acc_number']))
        {
            $hasError=true;
            $acc_number_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['acc_number']))
        {
            $hasError=true;
            $acc_number_error="Account Number Must Be Numaric";
        }
        else{
            $acc_number=$_POST['acc_number'];
        }

        if(empty($_POST['with_amount']))
        {
            $hasError=true;
            $with_amount_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['with_amount']))
        {
            $hasError=true;
            $with_amount_error="This Field Must Be Numaric";
        }
        else{
            $with_amount=$_POST['with_amount'];
        }

        if(empty($_POST['with_amount2']))
        {
            $hasError=true;
            $with_amount2_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['with_amount2']))
        {
            $hasError=true;
            $with_amount2_error="This Field Must Be Numaric";
        }
        else{
            $with_amount2=$_POST['with_amount2'];
        }

        if($with_amount!=$with_amount2)
        {
            $hasError=true;
            $with_amount_error="Ammount does not match";
            $with_amount2_error="Ammount does not match";
        }

        if(empty($_POST['password']))
        {
            $hasError=true;
            $password_error="Field Can Not Be Empty";
        }
        else{
            $password=$_POST['password'];
        }
    }
?>
<html> 
    <head> 
        <title>ATM Withdraw</title>
    </head>
    <body>
        <?php
            if(!$hasError)
            {
                echo $acc_number."<br>";
                echo $with_amount."<br>";
                echo $with_amount2."<br>";
                echo $password."<br>";
            }
        ?>
        <form action="" method="post"> 
            <table align="center" >
                <tr>
                    <td>Accound Number:</td> 
                    <td><input type="text" name="acc_number" value="<?php echo $acc_number ?>"></td> 
                    <td><?php echo $acc_number_error ?></td>
                </tr>
                <tr>
                    <td>Withdraw Amount:</td> 
                    <td><input type="text" name="with_amount" value="<?php echo $with_amount ?>"></td>
                    <td><?php echo $with_amount_error ?></td>
                </tr>

                <tr>
                    <td>Type Withdraw Amount again:</td> 
                    <td><input type="text" name="with_amount2" value="<?php echo $with_amount2 ?>"></td>
                    <td><?php echo $with_amount2_error ?></td>
                </tr>

                <tr>
                    <td>Password:</td> 
                    <td><input type="Password" name="password"></td>
                    <td><?php echo $password_error ?></td> 
                </tr>

                <tr> 
                    <td> 
                        <input type="submit" value="Cash Out">
                    </td> 
                </tr> 
            </table>
        </form>
    </body>
</html>