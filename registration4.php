<?php 
    $m_name="";
    $m_name_error="";
    $m_nid="";
    $m_nid_error="";
    $m_work_addr="";
    $m_work_addr_error="";
    $m_occupation="";
    $m_occupation_error="";
    $hasError=false;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(empty($_POST['m_name']))
        {
            $hasError=true;
            $m_name_error="Field Can Not Be Empty";
        }

        else{
            $m_name=$_POST['m_name'];
        }

        if(empty($_POST['m_nid']))
        {
            $hasError=true;
            $m_nid_error="Field Can Not Be Empty";
        }
        elseif(!is_numeric($_POST['m_nid'])){
            $hasError=true;
            $m_nid_error="Field Value Must BE Numaric";
        }
        else{
            $m_nid=$_POST['m_nid'];
        }

        if(empty($_POST['m_work_addr']))
        {
            $hasError=true;
            $m_work_addr_error="Field Can Not Be Empty";
        }

        else{
            $m_work_addr=$_POST['m_work_addr'];
        }

        if(!isset($_POST['m_occupation']))
        {
            $hasError=true;
            $m_occupation_error="Field Can Not Be Empty";
        }

        else{
            $m_occupation=$_POST['m_occupation'];
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
            echo $m_name."<br>";
            echo $m_nid."<br>";
            echo $m_work_addr."<br>";
            echo $m_occupation."<br>";
        }
    ?>
        <table style="border:2px solid black">
			<tr>
				<td>Step 1 > </td>
				<td>Step 2 > </td>
				<td>Step 4 > </td>
				<td><b>Step 4 > </b></td>
				<td>Step 5 > </td>
				<td>Step 6 > </td>
			</tr>
		</table>
        <form action="" method="POST"> 
            <fieldset>
                <legend><h2>Parent's Info</h2></legend>
                <table align="center">
                    <tr> 
                        <td>Mother's Name:</td> 
                        <td><input type="text" name="m_name" value="<?php echo $m_name ?>"></td> 
                        <td><?php echo $m_name_error ?></td>
                    </tr>
                    <tr>
                        <td>Mother's NID:</td> 
                        <td><input type="text" name="m_nid" value="<?php echo $m_nid ?>"></td> 
                        <td><?php echo $m_nid_error ?></td>
                    </tr>
                    <tr>
                        <td>Mother's work  Address:</td> 
                        <td><input type="text" name="m_work_addr" value="<?php echo $m_work_addr ?>"></td> 
                        <td><?php echo $m_work_addr_error ?></td>
                    </tr>
                    <tr> 
                        <td>Occupation:</td> 
                        <td>
                            <select name="m_occupation">
                                <option value="----" selected disabled>--SELECT--</option>
                                <option <?php echo $m_occupation=='service'?"selected":"" ?> value="service">Service</option> 
                                <option <?php echo $m_occupation=='business'?"selected":"" ?> value="business">Business</option>
                                <option <?php echo $m_occupation=='teacher'?"selected":"" ?> value="teacher">Teacher</option>
                            </select> 
                        </td> 
                        <td><?php echo $m_occupation_error ?></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td> <input type="submit" value="Submit"></td> 
                    </tr> 
                </table>
            </fieldset>
        </form>
        <a href="./registration5.php"><button>Next</button></a>
    </body>
</html>
  
	