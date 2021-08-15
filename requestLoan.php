<?php
    require('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $username=$_SESSION['uname'];
    $q="SELECT acc_number FROM account WHERE user_id='$id'";
    $acc_number=get($q)[0]['acc_number'];
    $q="SELECT * FROM loan WHERE asso_acc='$acc_number'";
    $res=get($q);
    $staus="";
    if(isset($_POST['apply']))
    {
        $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$username', 'user', 'emp', 'CHEQUE_REQUEST', 'CHEQUE REQUEST FROM $username', 'CHEQUE REQUEST FROM $username, ACCOUNT NUMBER: $acc_number', 'Pending')";
        $r=execute($q);
        if($r==true)
        {
            $staus="sent";
        }
    }

    if(isset($_POST['apply_loan']))
    {
        $amount="";
        $amount_err="";
        if(empty($_POST['amount']))
        {
            $amount_err="Field is Empty";
        }
        elseif(!is_numeric($_POST['amount']))
        {
            $amount_err="Value Must Be Number";
        }
        else{
            $amount=$_POST['amount'];
        }
        if($amount_err=="")
        {
            $q="INSERT INTO message(sender_name,sender_level,receiver,type,subject,message, status) VALUES('$username', 'user', 'emp', 'LOAN_REQUEST', 'Amount $amount', 'Loan REQUEST FROM $username, ACCOUNT NUMBER: $acc_number', 'Pending')";
            $r=execute($q);
            if($r==true)
            {
                $staus="sent";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Request Cheque Book</title>
    </head>
    <body>
        <?Php 
            require('./header.php');
            if($staus=="sent")
            {
                echo "<div class='pass'>Request Sent</div>";
            }
            
        ?>
        <div class="form_container">
            <form action="" method="post">
                <p>Amount</p>
                <input type="text" name="amount" id="">
                <input class="pass btn" style="width: 500px; display:block; margin: 50px auto" name="apply_loan" type="submit" value="Apply for A Personal Loan">
            </form>
        </div>
        <div class="form_container">
            <?php
                if(empty($res))
                {
                    echo "You Dont Have Any Loan Record";
                }
                else{
                    echo "<table class='tab' style='width: 100%;'>";
                    echo "<tr>";
                    echo "<th>Loan Type</th>";
                    echo "<th>Issued By</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Time</th>";
                    echo "</tr>";
                    foreach($res as $r)
                    {
                        echo "<tr>";
                        echo "<td>",$r['type'],"</td>";
                        echo "<td>",$r['issued_by'],"</td>";
                        echo "<td>",$r['amount'],"</td>";
                        echo "<td>",$r['t'],"</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </div>
    </body>
</html>