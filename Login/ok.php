<html>
<head>
    <title>SIGN UP</title>
</head>
<body>
    <?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['comp'];
        $regid=$_POST['regid'];
        $dept=$_POST['dept'];
        $sql="insert into mess(regid,comp,dept)"."values('$regid','$comp','$dept')";
        $repasses=mysqli_query($conn,$sql);
    ?>
DONE