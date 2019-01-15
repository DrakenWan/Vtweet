<?php
    if(isset($_POST['Submit']))
    {   
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['deleteme'];
        $query = "delete from campus where Campus_Comp_No = '$_POST[deleteme]'";
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
        echo "Welcome வரவேற்கிறோம்!";
        ?>
</h1>
<h2>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM campus");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT Reg_Id, Issue, Details, Campus_Comp_No FROM campus where Campus_Dept = 'Food_Park'";
        $row1 = mysqli_query($conn,$query1);
        while($row = mysqli_fetch_assoc($row1)) {
        echo $row["Reg_Id"]."   :  ".$row["Issue"]."   :  ".$row["Details"]."   =>  ".$row["Campus_Comp_No"]."<br>";
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