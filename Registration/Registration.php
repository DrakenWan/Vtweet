<html>
<head>
    <title>SIGN UP</title>
</head>
<body>
    <?php
        $host="localhost";
        $dbuser="root";        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        if(mysqli_connect_errno())
        {
            die("c lost");
        }
        else
        {

            $fn=$_POST['fn'];
            $regid=$_POST['regid'];
            $eid=$_POST['eid'];
            $pass=$_POST['pass'];
            $repass=$_POST['repass'];
            $check = "SELECT * from reg where regid='$_POST[regid]'";
            $lala = mysqli_query($conn, $check);
            $data = mysqli_fetch_array($lala, MYSQLI_NUM);
        if(empty($fn)||empty($eid)||empty($regid)||empty($pass)||empty($repass))
        {
            echo "Oops! can't leave any field blank";
        }
        else if($pass!=$repass)
        {
            echo("Oops! passwords do not match");
        }
        else if($data[0] > 0)
        {
            echo "ALREADY REGISTERED";
        }
        else
        {
            echo "<p style='text-align:center;''>"."<img src='tu1.jpg'/>"."</p>";
            echo "<p style='text-align:center;font-size:50px;'>"."Successfully Registered"."</p>";
            echo "<a href = 'http://localhost/DBMS PROJECT/L&RPage/L&RPage.html'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";

            $sql="insert into reg(fn,eid,regid,pass)"."values('$fn','$eid','$regid','$pass')";
            $repasses=mysqli_query($conn,$sql);
        }
    }
    ?>
</body>
</html>