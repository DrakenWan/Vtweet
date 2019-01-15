<html>
<head>
    <title>DONE!</title>

</head>
<body>
    <?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $yo = $_POST['yo'];
        if($yo=="1")
        {
        $comp=$_POST['complaint'];
        $regid=$_POST['regid'];
        $room=$_POST['room'];
        $sql="insert into class_room(Class_Room_No,Complaint,regid)"."values('$room','$comp','$regid')";
        $repasses=mysqli_query($conn,$sql);
        }
        elseif($yo=="2")
        {
        $tid=$_POST['tid'];
        $regid=$_POST['regid'];
        $tname=$_POST['tname'];
        $slot=$_POST['slot'];
        $reason=$_POST['reason'];
        $sql="insert into teacher(Teacher_ID,Teacher_Name,Complaint,Slot,Reg_ID)"."values('$tid','$tname','$reason','$slot','$regid')";
        $repasses=mysqli_query($conn,$sql);
        }
        elseif($yo=="3")
        {
        $dept=$_POST['DEPT'];
        $regid=$_POST['regid'];
        $sugg=$_POST['sugg'];
        $sql="insert into suggestion(Department,Suggestion,RegId)"."values('$dept','$sugg','$regid')";
        $repasses=mysqli_query($conn,$sql);
        }
        elseif($yo=="4")
        {
        $dept=$_POST['dept'];
        $regid=$_POST['regid'];
        $sugg=$_POST['comp'];
        $issue=$_POST['issue'];
        $sql="insert into Campus(Issue,Details,Reg_Id,Campus_Dept)"."values('$issue','$sugg','$regid','$dept')";
        $repasses=mysqli_query($conn,$sql);
        }
?>
COMPLAIN REGISTERED!
