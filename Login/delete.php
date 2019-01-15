<html>
<body>
<?php
$host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['deleteme'];
        echo $comp;
        $query = "delete from hostel where complain_no = '$_POST[deleteme]'";
        $repasses=mysqli_query($conn,$query);

?>
GO BACK
</body>
</html>