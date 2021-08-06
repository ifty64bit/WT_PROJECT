<?php 
    include('./Model/db_config.php');
    #$acc_number="";
    #$acc_number_error="";
    $acc_type="";
    $acc_type_error="";
    $tranc_limit="";
    $tranc_limit_error="";
    $with_limit="";
    $with_limit_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
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
        if(!$hasError)
        {
            
            $query="INSERT INTO user(username,fname,lname,email,password,status) VALUES(".$_COOKIE['uname'].",".$_COOKIE['first_name'].",".$_COOKIE['last_name'].",".$_COOKIE['email'].",".$_COOKIE['password'].",'Pending')";
            echo $query;
            $result=execute($query);
            if($result==true)
            {
                echo "INSERTED USER";
            }
            else{
                echo "ERROR";
            }
            $query2="SELECT id FROM `user` WHERE username=".$_COOKIE['uname'];
            echo get($query2);
            $id=get($query2);
            $querry3="INSERT INTO account(user_id,acc_type,tran_limit,with_limit) VALUES('$id','$acc_type','$tranc_limit','$with_limit')";
            execute($querry3);
            $birth=$_COOKIE['b_year']."-".$_COOKIE['b_month']."-".$_COOKIE['b_day'];
            $querry4="INSERT INTO about_user(id,house,road,block,division,district,gender,birth,phone) VALUES('$id',".$_COOKIE['house'].",".$_COOKIE['road'].",".$_COOKIE['block'].",".$_COOKIE['division'].",".$_COOKIE['district'].",".$_COOKIE['gender'].",'$birth',".$_COOKIE['phone'].")";
            execute($querry4);
            //$querry5="INSERT INTO nominee_user(id,n_first_name,n_last_name,nominee_nid,n_father_name,n_father_nid,n_mother_name,n_mother_nid,addr,n_phone,n_occu) VALUES('$id',)";

        } 
    }

?>

<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
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
                        <td><input type="submit" value="Complete"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <a href="./_home.html"><button>Next</button></a>
    </body>
</html>