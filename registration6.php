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
<<<<<<< HEAD:registrationform6.php
        <title>Reg 6</title>
=======
        <title>Sign Up</title>
>>>>>>> 46d10211ce893de91de2a967bfb85e3cd72f98c3:registration6.php
    </head>
    <body>
    <?php
        if(!$hasError)
        {
            echo $acc_number."<br>";
            echo $acc_type."<br>";
            echo $tranc_limit."<br>";
            echo $with_limit."<br>";
        } 
    ?>
        <table style="border:2px solid black">
			<tr>
				<td>Step 1 > </td>
				<td>Step 2 > </td>
				<td>Step 4 > </td>
				<td>Step 4 > </td>
				<td>Step 5 > </td>
				<td><b>Step 6 > </b></td>
			</tr>
		</table>
        <form action="" method="post">
            <fieldset>
                <legend><h2>Account Info</h2></legend>
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
        <a href="./_home.html"><button>Next</button></a>
    </body>
</html>