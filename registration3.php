<?php 
    include('./Controller/registration3.php');
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
                <span style="color: #000000;">Step 3 > </span>
                <span>Step 4 > </span>
                <span>Step 5 > </span>
                <span>Step 6  </span>
            </h3>
        </div>
        <div class="form_container">
            <form action="" method="post"> 
                <legend><h2>Parent's Info</h2></legend>
                <table align="center">
                    <tr> 
                        <td>Father's Name:</td> 
                        <td><input type="text" name="f_name" value="<?php echo $f_name ?>"></td>
                        <td><?php echo $f_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Father's NID:</td> 
                        <td><input type="text" name="f_nid" value="<?php echo $f_nid ?>"></td> 
                        <td><?php echo $f_nid_error ?></td>
                    </tr>
                    <tr>
                        <td>Father's work  Address:</td> 
                        <td><input type="text" name="f_work_addr" value="<?php echo $f_work_addr ?>"></td> 
                        <td><?php echo $f_work_addr_error ?></td>
                    </tr>
                    <tr> 
                        <td>Occupation:</td> 
                        <td>
                            <select name="f_occupation"> 
                                <option value="" selected disabled>--Select--</option>
                                <option <?php echo $f_occupation=='service'?"selected":"" ?> value="service">Service</option> 
                                <option <?php echo $f_occupation=='busniess'?"selected":"" ?> value="busniess">Business</option>
                                <option <?php echo $f_occupation=='teacher'?"selected":"" ?> value="teacher">Teacher</option>
                            </select> 
                        </td> 
                        <td><?php echo $f_occupation_error ?></td>
                    </tr>
                    <tr> 
                        <td> 
                            <input class="btn" name="reg3" type="submit" value="Submit">
                        </td> 
                    </tr> 
                </table>
            </form>
        </div>
    </body>
</html>
  
	