<?php 
    
    $acc_number="";
    $acc_number_error="";
    $tranc_amount="";
    $tranc_amount_error="";
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
        <form action="" method="post"> 
            <table align="center" >
                
                    <td>Accound Number:</td> 
                    <td><input type="text" name="acc_number"></td> 
                    <td><?php echo $acc_number_error ?></td>
                </tr>
                <tr>
                    <td>Transaction Amount:</td> 
                    <td><input type="text" name="transc_amount"></td>
                    <td><?php echo $tranc_amount_error ?></td>
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