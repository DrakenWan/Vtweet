<html>
<head>
    <title>Teacher_Complaint</title>
</head>
<body>
    <?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $tid=$_POST['tid'];
        $regid=$_POST['regid'];
        $tname=$_POST['tname'];
        $slot=$_POST['slot'];
        $reason=$_POST['reason'];
        $sql="insert into teacher(Teacher_ID,Teacher_Name,Complaint,Slot,Reg_ID)"."values('$tid','$tname','$reason','$slot','$regid')";
        $repasses=mysqli_query($conn,$sql);
    ?>
COMPLAIN REGISTERED!