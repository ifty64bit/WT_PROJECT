<?php 
    $f_name="father Name";
    $f_name_err="";
    $f_nid="012548655";
    $f_nid_err="";
    $f_occupation="Job";
    $f_occupation_err="";
    $f_phone="0121212";
    $f_phone_err="";
    $f_work="somewhere";
    $f_work_err="";
    $m_name="mother Name";
    $m_name_err="";
    $m_nid="012548655";
    $m_nid_err="";
    $m_occupation="Job";
    $m_occupation_err="";
    $m_phone="0121212";
    $m_phone_err="";
    $m_work="somewhere";
    $m_work_err="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['f_name']))
        {
            $hasError=true;
            $f_name_err="Filed Can Not Be Empty";
        }
        else{
            $f_name=$_POST['f_name'];
        }

        if(empty($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_err="NID Must Be Numaric";
        }
        else{
            $f_nid=$_POST['f_nid'];
        }

        if(empty($_POST['f_occupation']))
        {
            $hasError=true;
            $f_occupation_err="Filed Can Not Be Empty";
        }
        else{
            $f_occupation=$_POST['f_occupation'];
        }

        if(empty($_POST['f_phone']))
        {
            $hasError=true;
            $f_phone_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['f_phone']))
        {
            $hasError=true;
            $f_phone_err="Phone Must Be Numaric";
        }
        else{
            $f_phone=$_POST['f_phone'];
        }

        if(empty($_POST['f_work']))
        {
            $hasError=true;
            $f_work_err="Filed Can Not Be Empty";
        }
        else{
            $f_work=$_POST['f_work'];
        }


        if(empty($_POST['m_name']))
        {
            $hasError=true;
            $m_name_err="Filed Can Not Be Empty";
        }
        else{
            $m_name=$_POST['m_name'];
        }

        if(empty($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_err="NID Must Be Numaric";
        }
        else{
            $m_nid=$_POST['m_nid'];
        }

        if(empty($_POST['m_occupation']))
        {
            $hasError=true;
            $m_occupation_err="Filed Can Not Be Empty";
        }
        else{
            $m_occupation=$_POST['m_occupation'];
        }

        if(empty($_POST['m_phone']))
        {
            $hasError=true;
            $m_phone_err="Fied Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['m_phone']))
        {
            $hasError=true;
            $m_phone_err="Phone Must Be Numaric";
        }
        else{
            $m_nid=$_POST['m_phone'];
        }

        if(empty($_POST['m_work']))
        {
            $hasError=true;
            $m_work_err="Filed Can Not Be Empty";
        }
        else{
            $m_work=$_POST['f_work'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Information</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h2>Family Info</h2></legend>
            <table align="center">
                <tr>
                    <td>Father's Name:</td>
                    <td><input type="text" name="f_name" id="f_name" value="<?php echo $f_name ?>"></td>
                    <td><?php echo $f_name_err ?></td>
                </tr>
                <tr>
                    <td>
                        Father's NID:
                    </td>
                    <td>
                        <input type="text" name="f_nid" id="f_nid" value="<?php echo $f_nid ?>">
                    </td>
                    <td><?php echo $f_nid_err ?></td>
                </tr>
                <tr>
                    <td>
                        Occupation:
                    </td>
                    <td>
                        <input type="text" name="f_occupation" id="f_occupation" value="<?php echo $f_occupation ?>">
                    </td>
                    <td><?php echo $f_occupation_err ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="f_phone" id="f_phone" value="<?php echo $f_phone ?>"></td>
                    <td><?php echo $f_phone_err ?></td>
                </tr>
                <tr>
                    <td>Father Work Address</td>
                    <td><input type="text" name="f_work" id="f_work" value="<?php echo $f_work ?>"></td>
                    <td><?php echo $f_work_err ?></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><input type="text" name="m_name" id="m_name" value="<?php echo $m_name ?>"></td>
                    <td><?php echo $m_name_err ?></td>
                </tr>
                <tr>
                    <td>
                        Mother's NID:
                    </td>
                    <td>
                        <input type="text" name="m_nid" id="m_nid" value="<?php echo $m_nid ?>">
                    </td>
                    <td><?php echo $m_nid_err ?></td>
                </tr>
                <tr>
                    <td>
                        Occupation:
                    </td>
                    <td>
                        <input type="text" name="m_occupation" id="m_occupation" value="<?php echo $m_occupation ?>">
                    </td>
                    <td><?php echo $m_occupation_err ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="m_phone" id="m_phone" value="<?php echo $m_phone ?>"></td>
                    <td><?php echo $m_phone_err ?></td>
                </tr>
                <tr>
                    <td>Mother's Work Address</td>
                    <td><input type="text" name="m_work" id="m_work" value="<?php echo $m_work ?>"></td>
                    <td><?php echo $m_work_err ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>