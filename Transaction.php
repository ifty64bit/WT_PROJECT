<?php 
    $acc_name="";
    $acc_name_error="";
    $acc_number="";
    $acc_number_error="";
    $transc_amount="";
    $transc_amount_error="";
    $password="";
    $password_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['acc_name']))
        {
            $hasError=true;
            $acc_name_error="Field Can Not Be Empty";
        }
        else{
            $acc_name=$_POST['acc_name'];
        }

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

        if(empty($_POST['transc_amount']))
        {
            $hasError=true;
            $transc_amount_error="This Field IS Required";
        }
        elseif(!is_numeric($_POST['transc_amount']))
        {
            $hasError=true;
            $transc_amount_error="This Field Must Be Numaric";
        }
        else{
            $transc_amount=$_POST['transc_amount'];
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
        <title>Send Money</title>
    </head>
    <body>
    <?php
        if(!$hasError)
        {
            echo $acc_name."<br>";
            echo $acc_number."<br>";
            echo $transc_amount."<br>";
            echo $password."<br>";
        }
    ?>
        <form action="" method="post">
            <fieldset>
                <legend><h2>Transfer Money</h2></legend>
                <table align="center" >
                    <tr> 
                        <td>Receiver Name:</td> 
                        <td><input type="text" name="acc_name" value="<?php echo $acc_name ?>"></td>
                        <td><?php echo $acc_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Accound Number:</td> 
                        <td><input type="text" name="acc_number" value="<?php echo $acc_number ?>"></td> 
                        <td><?php echo $acc_number_error ?></td>
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
                            <input type="submit" value="Send Money">
                        </td> 
                    </tr> 
                </table>
            </fieldset>
        </form>
    </body>
</html>