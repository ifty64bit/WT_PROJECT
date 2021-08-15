<?php 
    include('./Controller/atm.php');
?>

<!DOCTYPE html>
<html> 
    <head> 
        <link rel="stylesheet" href="./css/style.css">
        <title>ATM Withdraw</title>
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
                echo "<div class='err'>Amount Exceeds Withdraw Limit</div>";
            }
            elseif($status=="e_b")
            {
                echo "<div class='err'>Amount Exceeds Balance</div>";
            }
            elseif($status=="sent")
            {
                echo "<div class='pass'>Money Withdrawed Succesfully. GO <a href='./_home.php'>Home</a></div>";
            }
        ?>
        <div class="form_container">
            <form action="" method="post"> 
                <table align="center" >
                    <tr>
                        <td>ATM Number:</td> 
                        <td><input type="text" name="atm_number" value="<?php echo $atm_number ?>"></td>
                        <td><?php echo $atm_number_error ?></td>
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
                            <input class="btn" name="atm" type="submit" value="Cash Out">
                        </td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>