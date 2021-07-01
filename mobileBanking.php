<?php 
    $p_number="";
    $p_number_error="";
    $p_number2="";
    $p_number2_error="";
    $transc_amount="";
    $transc_amount_error="";
    $password="";
    $password_error="";
    $hasError=false;

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
                echo $p_number."<br>";
                echo $p_number2."<br>";
                echo $transc_amount."<br>";
                echo $password."<br>";
                
            }
        ?>
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
                        <input type="submit" value="Cash Out">
                    </td> 
                </tr> 
            </table>
        </form>
    </body>
</html>