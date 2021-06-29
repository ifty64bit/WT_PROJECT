<?php 
    $acc_number="";
    $acc_number_error="";
    $acc_type="";
    $acc_type_error="";
    $tranc_limit="";
    $tranc_limit_error="";
    $with_limit="";
    $with_limit_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['acc_number']))
        {
            $hasError=true;
            $acc_number_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['acc_number'])){
            $hasError=true;
            $acc_number_error="Field Value Must BE Numaric";
        }
        else{
            $acc_number=$_POST['acc_number'];
        }

        if(!isset($_POST['acc_type']))
        {
            $hasError=true;
            $acc_type_error="You Must Select A Option";
        }
        else{
            $acc_type=$_POST['acc_type'];
        }        

        if(empty($_POST['tranc_limit']))
        {
            $hasError=true;
            $tranc_limit_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['tranc_limit'])){
            $hasError=true;
            $tranc_limit_error="Field Value Must BE Numaric";
        }
        else{
            $tranc_limit=$_POST['tranc_limit'];
        }

        if(empty($_POST['with_limit']))
        {
            $hasError=true;
            $with_limit_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['with_limit'])){
            $hasError=true;
            $with_limit_error="Field Value Must BE Numaric";
        }
        else{
            $with_limit=$_POST['with_limit'];
        }
    }

?>

<html>
    <head>
        <title>Step 6</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>Account Settings</legend>
                <table align="center">
                    <tr>
                        <td>Account Number:</td>
                        <td><input type="text" name="acc_number" value="<?php echo $acc_number ?>"></td>
                        <td><?php echo $acc_number_error ?></td>
                    </tr>
                    <tr>
                        <td>Account Type</td>
                        <td>
                            <select name="acc_type">
                                <option value="----" disabled selected>--Select--</option>
                                <option <?php echo $acc_type=='checking' ? "selected":"" ?> value="checking">Checking Account</option>
                                <option <?php echo $acc_type=='saving' ? "selected":"" ?> value="saving">Saving Account</option>
                                <option <?php echo $acc_type=='certificate' ? "selected":"" ?> value="certificate">Certificate of Deposit</option>
                                <option <?php echo $acc_type=='market' ? "selected":"" ?> value="market">Money Market Account</option>
                                <option <?php echo $acc_type=='individual' ? "selected":"" ?> value="individual">Individual Retirement Account</option>
                            </select>
                        </td>
                        <td><?php echo $acc_type_error ?></td>
                    </tr>
                    <tr>
                        <td>Transaction Limit:</td>
                        <td><input type="text" name="tranc_limit" value="<?php echo $tranc_limit ?>"></td>
                        <td><?php echo $tranc_limit_error ?></td>
                    </tr>
                    <tr>
                        <td>Withdrawl Limit:</td>
                        <td><input type="text" name="with_limit" value="<?php echo $with_limit ?>"></td>
                        <td><?php echo $with_limit_error ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Next"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>