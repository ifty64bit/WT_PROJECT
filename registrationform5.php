<?php 
    $n_f_name="";
    $n_f_name_error="";
    $n_l_name="";
    $n_l_name_error="";
    $n_nid="";
    $n_nid_error="";
    $n_father_name="";
    $n_father_name_error="";
    $n_father_nid="";
    $n_father_nid_error="";
    $n_mother_name="";
    $n_mother_name_error="";
    $n_mother_nid="";
    $n_mother_nid_error="";
    $n_address="";
    $n_address_error="";
    $n_phone="";
    $n_phone_error="";
    $n_occupation="";
    $n_occupation_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['n_f_name']))
        {
            $hasError=true;
            $n_f_name_error="Field Can Not Be Empty";
        }
        else{
            $n_f_name=$_POST['n_f_name'];
        }

        if(empty($_POST['n_l_name']))
        {
            $hasError=true;
            $n_l_name_error="Field Can Not Be Empty";
        }
        else{
            $n_l_name=$_POST['n_l_name'];
        }

        if(empty($_POST['n_nid']))
        {
            $hasError=true;
            $n_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_nid']))
        {
            $hasError=true;
            $n_nid_error="Field Must Be Numaric";
        }
        else{
            $n_nid=$_POST['n_nid'];
        }

        if(empty($_POST['n_father_name']))
        {
            $hasError=true;
            $n_father_name_error="Field Can Not Be Empty";
        }
        else{
            $n_father_name=$_POST['n_father_name'];
        }

        if(empty($_POST['n_father_nid']))
        {
            $hasError=true;
            $n_father_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_father_nid']))
        {
            $hasError=true;
            $n_father_nid_error="Field Must Be Numaric";
        }
        else{
            $n_father_nid=$_POST['n_father_nid'];
        }

        if(empty($_POST['n_mother_name']))
        {
            $hasError=true;
            $n_mother_name_error="Field Can Not Be Empty";
        }
        else{
            $n_mother_name=$_POST['n_mother_name'];
        }

        if(empty($_POST['n_mother_nid']))
        {
            $hasError=true;
            $n_mother_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_mother_nid']))
        {
            $hasError=true;
            $n_mother_nid_error="Field Must Be Numaric";
        }
        else{
            $n_mother_nid=$_POST['n_mother_nid'];
        }

        if(empty($_POST['n_phone']))
        {
            $hasError=true;
            $n_phone_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['n_phone']))
        {
            $hasError=true;
            $n_phone_error="Field Must Be Numaric";
        }
        else{
            $n_phone=$_POST['n_phone'];
        }

        if(empty($_POST['n_occupation']))
        {
            $hasError=true;
            $n_occupation_error="Field Can Not Be Empty";
        }
        else{
            $n_occupation=$_POST['n_occupation'];
        }
        if(empty($_POST['n_address']))
        {
            $hasError=true;
            $n_address_error="Field Can Not Be Empty";
        }
        else{
            $n_address=$_POST['n_address'];
        }
    }

?>
<html>
    <head>
        <title>Reg</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend><h2>Registration Form for Nominee</h2></legend>
                <table align="center">
                    <tr>
                        <td>Nominee's First Name*</td>
                        <td>:<input type="text" name="n_f_name" value=<?php echo "$n_f_name" ?>></td>
                        <td><?php echo $n_f_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Last Name*</td>
                        <td>:<input type="text" name="n_l_name" value=<?php echo "$n_l_name" ?>></td>
                        <td><?php echo $n_l_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's NID</td>
                        <td>:<input type="text" name="n_nid" value=<?php echo "$n_nid" ?> ></td>
                        <td><?php echo $n_nid_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Father's Name</td>
                        <td>:<input type="text" name="n_father_name" value=<?php echo "$n_father_name" ?>></td>
                        <td><?php echo $n_father_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Father's NID</td>
                        <td>:<input type="text" name="n_father_nid" value=<?php echo "$n_father_nid" ?>></td>
                        <td><?php echo $n_father_nid_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Mother's Name</td>
                        <td>:<input type="text" name="n_mother_name" value=<?php echo "$n_mother_name" ?>></td>
                        <td><?php echo $n_mother_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Mother's NID</td>
                        <td>:<input type="text" name="n_mother_nid" value=<?php echo "$n_mother_nid" ?>></td>
                        <td><?php echo $n_mother_nid_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Address</td>
                        <td>:<input type="text" name="n_address" value=<?php echo "$n_address" ?>></td>
                        <td><?php echo $n_address_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Phone Number</td>
                        <td>:<input type="text" name="n_phone" value=<?php echo "$n_phone" ?>></td>
                        <td><?php echo $n_phone_error ?></td>
                    </tr>
                    <tr>
                        <td>Nominee's Occupation</td>
                        <td>:<input type="text" name="n_occupation" value=<?php echo "$n_occupation" ?>></td>
                        <td><?php echo $n_occupation_error ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Next">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>