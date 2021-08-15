<?php 
    include('./Controller/registration5.php');
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
            <span style="color: #000000;">Step 5 > </span>
            <span>Step 6  </span>
        </h3>
    </div>
    <div class="form_container">
        <form action="" method="post">
            <h2>Registration Form for Nominee</h2>
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
                        <input class="btn" name="reg5" type="submit" value="Next">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>