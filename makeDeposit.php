<?php include('./Controller/makeDeposit.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Create Deposit</title>
</head>
<body>
    <?php include('./header.php') ?>
    <?php
        if($loaded==true)
        {
            echo "<div class='pass'>Account Loaded Successfully. Balance: $bal . GO <a href='./_home.php'>Home</a></div>";
        }
    ?>
    <div class="form_container">
        <form action="" method="post">
            <div class="f_between">
                <div>Select Card</div>
                <div>
                    <select name="c_name" id="c_name">
                        <option selected disabled value="----">----</option>
                        <option value="Visa">Visa</option>
                        <option value="Mastercard">Mastercard</option>
                    </select>
                    <span><?php echo $card_type_err ?></span>
                </div>
            </div>
             
            <div class="f_between">
                <div>Enter Card Number</div>
                <div><input type="text" name="card" id="card" value="<?php echo $card ?>"><span><?php echo $card_err ?></span></div>
            </div>

            <div class="f_between">
                <div>CVV Code</div>
                <div><input type="text" name="cvv" id="cvv" value="<?php echo $cvv ?>"> <span><?php echo $cvv_err ?></span></div>
            </div>

            <div class="f_between">
                <div>Expiry Date</div>
                <div><input type="text" name="exp" id="exp" value="<?php echo $exp ?>"><span><?php echo $exp_err ?></span></div>
            </div>

            <div class="f_between">
                <div>Ammount</div>
                <div><input type="text" name="ammount" id="ammount" value="<?php echo $ammount ?>"> <span><?php echo $ammount_err ?></span></div>
            </div>

            <input class="btn" name="deposit" type="submit" value="Deposit">
        </form>
    </div>
</body>
</html>