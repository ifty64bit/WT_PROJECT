<?php 
    include('./Controller/registration6.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Sign Up</title>
    </head>
    <body>
        <?php include("./header.php") ?>
        <div class="progress">
            <h3>
                <span style="color: #00FF0A;">Step 1 > </span>
                <span style="color: #00FF0A;">Step 2 > </span>
                <span style="color: #00FF0A;">Step 3 > </span>
                <span style="color: #00FF0A;">Step 4 > </span>
                <span style="color: #00FF0A;">Step 5 > </span>
                <span style="color: #000000;">Step 6  </span>
            </h3>
        </div>
        <div class="form_container">
            <form action="" method="post">
                <h2>Account Info</h2>
                <table align="center">
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
                        <td><input class="btn" name="reg6" type="submit" value="Complete"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>