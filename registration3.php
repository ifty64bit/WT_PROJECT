<?php 
    $f_name="";
    $f_name_error="";
    $f_nid="";
    $f_nid_error="";
    $f_work_addr="";
    $f_work_addr_error="";
    $f_occupation="";
    $f_occupation_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['f_name']))
        {
            $hasError=true;
            $f_name_error="Field Can Not Be Empty";
        }

        else{
            $f_name=$_POST['f_name'];
        }

        if(empty($_POST['f_nid']))
        {
            $hasError=true;
            $f_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['f_nid'])){
            $hasError=true;
            $f_nid_error="Field Value Must BE Numaric";
        }
        else{
            $f_nid=$_POST['f_nid'];
        }

        if(empty($_POST['f_work_addr']))
        {
            $hasError=true;
            $f_work_addr_error="Field Can Not Be Empty";
        }

        else{
            $f_work_addr=$_POST['f_work_addr'];
        }

        if(!isset($_POST['f_occupation']))
        {
            $hasError=true;
            $f_occupation_error="Field Can Not Be Empty";
        }

        else{
            $f_occupation=$_POST['f_occupation'];
        }
    }
?>
<html> 
    <head> 
        <title>Page Title</title>
    </head>
    <body>
    <?php 
        if(!$hasError)
        {
            echo $f_name."<br>";
            echo $f_nid."<br>";
            echo $f_work_addr."<br>";
            echo $f_occupation."<br>";
        }
    ?>
        <table style="border:2px solid black">
			<tr>
				<td>Step 1 > </td>
				<td>Step 2 > </td>
				<td><b>Step 3 > </b></td>
				<td>Step 4 > </td>
				<td>Step 5 > </td>
				<td>Step 6 > </td>
			</tr>
		</table>
        <form action="" method="post"> 
            <fieldset>
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
                            <input type="submit" value="Submit">
                        </td> 
                    </tr> 
                </table>
            </fieldset>
        </form>
        <a href="./registration4.php"><button>Next</button></a>
    </body>
</html>
  
	