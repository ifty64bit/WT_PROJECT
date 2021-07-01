<?php
    $addr_house="dummy data from DB";
    $addr_error="";
    $addr_road="dummy data from DB";
    $addr_block="101";
    $division="Dhaka";
    $division_error="";
    $district="";
    $district_error="";
    $zip="1020";
    $zip_error="";
    $phone="01717171717";
    $phone_error="";
    $birth_day="7";
    $birth_month="11";
    $birth_year="1998";
    $gender="male";
    $hasError=false;
    $divisions=["Barisal","Chittagong","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet"];
    $districts=["Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati","Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Mymensingh","Narayanganj","Narsingdi","Netrakona","Rajbari","Shariatpur","Sherpur","Tangail","Bagerhat","Chuadanga","Jessore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira","Bogra","Joypurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj","Dinajpur","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon","Habiganj","Moulvibazar","Sunamganj","Sylhet"];

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["house"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_house=$_POST["house"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_road=$_POST["road"];
        }

        if(empty($_POST["road"]))
        {
            $hasError=true;
            $addr_error="Field can not be Empty";
        }
        else{
            $addr_road=$_POST["road"];
        }

        if(empty($_POST["zip"]))
        {
            $hasError=true;
            $zip_error="ZIP field can not be Empty";
        }
        elseif(!is_numeric($_POST["zip"]))
        {
            $hasError=true;
            $zip_error="ZIP Must be Numaric";
        }
        else{
            $zip=$_POST["zip"];
        }

        if(empty($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Phone field can not be Empty";
        }
        elseif(!is_numeric($_POST["phone"]))
        {
            $hasError=true;
            $phone_error="Phone Number Must be Numaric";
        }
        else{
            $phone=$_POST["phone"];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Address & Personal Information</title>
</head>
<body>
    <?php 
        if(!$hasError)
        {
            echo $addr_house."<br>";
            echo $addr_road."<br>";
            echo $addr_block."<br>";
            echo $zip."<br>";
            echo $phone."<br>";
        }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Address Information</legend>
            <table align="center">
                <tr>
                    <td>
                        Address Information:
                    </td>
                    <td>
                        <input type="text" name="house" id="house" placeholder="House No" value="<?php echo $addr_house ?>">
                        <input type="text" name="road" id="road" placeholder="Road No" value="<?php echo $addr_road ?>"> <br>
                        <input type="text" name="block" id="block" placeholder="Block No" value="<?php echo $addr_block ?>">
                    </td>
                    <td>
                        <?php echo $addr_error ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Division:
                    </td>
                    <td>
                        <select name="division" id="division">
                            <option value="--Division--" disabled>--Division--</option>
                            <?php 
                                foreach($divisions as $d)
                                {
                                    echo "<option value='$d'>$d</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        District:
                    </td>
                    <td>
                        <select name="district" id="district">
                            <option value="--district--" disabled>--District--</option>
                            <?php 
                                foreach($districts as $d)
                                {
                                    echo "<option value='$d'>$d</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        ZIP:
                    </td>
                    <td>
                        <input type="text" name="zip" id="zip" value="<?php echo $zip ?>">
                    </td>
                    <td><?php echo $zip_error ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone ?>"></td>
                    <td><?php echo $phone_error ?></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td>
                        <span>Day</span>
                        <select name="day" id="day">
                                <?php for($i=1;$i<=31;$i++){ echo "<option value=$i ",$birth_day==$i?'selected':'',">$i</option>"; } ?>
                        </select> 
                        <span>Month</span>
                        <select name="month" id="month">
                                <?php for($i=1;$i<=12;$i++){ echo "<option value=$i ",$birth_month==$i?'selected':'',">$i</option>"; } ?>
                        </select> <br>
                        <span>Year</span>
                        <select name="year" id="year">
                                <?php for($i=1990;$i<=2008;$i++){ echo "<option value=$i ",$birth_year==$i?'selected':'',">$i</option>"; } ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="male" <?php echo $gender=='male'?"checked":'' ?> >
                        <label for="gender">Male</label>
                        <input type="radio" name="gender" id="gender" value="female" <?php echo $gender=='female'?"checked":'' ?> >
                        <label for="gender">Female</label>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>