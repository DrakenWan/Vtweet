<?php
    if(isset($_POST['Submit']))
    {   
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['deleteme'];
        $query = "delete from teacher where T_Complaint_No = '$_POST[deleteme]'";
        $repasses=mysqli_query($conn,$query);
    }?>


<!DOCTYPE html>
<html>
<head></head>
<body>

<h1 style="background-color: black; color:red; align;">
        <?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        echo "Welcome Student Welfare";
        ?>
</h1>
<h2>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM teacher");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT Teacher_Name, Complaint, Slot, Reg_ID, T_Complaint_No FROM teacher";
        $row1 = mysqli_query($conn,$query1);
        while($row = mysqli_fetch_assoc($row1)) {
        echo "Complaint By => ".$row["Reg_ID"]."<br>";
        echo $row["Teacher_Name"]."   :  ".$row["Complaint"]."   :  ".$row["Slot"]."   =>  ".$row["T_Complaint_No"]."<br>"."<br>";
        }
?>
</h2>
<br><br><br><br><br><br>
DELETE THE COMPLAINT WHICH IS SOLVED 
<br><br>
<form action="" method="POST">
<input type="number" name="deleteme" placeholder="Complaint Number"/><br><br>
<input type="submit" name="Submit" value="Submit"/>
</form>
</h2>
</body>
</html>