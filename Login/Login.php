<html>
<head>
<title>Welcome!</title>

</head>
<style>
h3
{
  text-align: =center;
  
}
form {
    display: inline-block; display: inline; 
}
.button5 {
  padding: 10px 30px;
  border: none;
  background-color: #3CBC8D;
  border-radius: 20%;
  cursor: pointer;
  box-shadow: 0 9px #36a57d;
}
.button5:active {
  background-color: #308e6c;
  box-shadow: 0 5px #267055;
  transform: translateY(4px);
}
</style>
<body background="123.png">
<h1 align="center" style="background-color: #3CBC8D; color: white;"><?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*":
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection Lost");
        }
        else
        {
            $regid=$_POST['regid'];
            $pass=$_POST['pass'];
        if(empty($regid)||empty($pass))
        {
            header('Location: mypage.php');
        }
        elseif($regid=="hostelb"&&$pass=="warden123")
        {
          header('Location: warden.php');
        }
        elseif($regid=="hostelg"&&$pass=="warden456")
        {
          header('Location: wardeng.php');
        }
        elseif($regid=="stud_welfare"&&$pass=="stud1234")
        {
          header('Location: Stud_Welfare.php');
        }
        elseif($regid=="vitelec"&&$pass=="vitelec")
        {
          header('Location: vitelec.php');
        }
        elseif($regid=="vitbank"&&$pass=="vitbank")
        {
          header('Location: Atm.php');
        }
        elseif($regid=="foodpark"&&$pass=="foodpark")
        {
          header('Location: Food.php');
        }
        elseif($regid=="vmart123"&&$pass=="vmart123")
        {
          header('Location: Vmart.php');
        }
        elseif($regid=="vitsport"&&$pass=="vitsport")
        {
          header('Location: Sports.php');
        }
        elseif($regid=="vitlib"&&$pass=="vitlib")
        {
          header('Location: Lib.php');
        }
        else if(!empty($_POST['regid']))
        {
            $query = mysqli_query($conn, "SELECT * FROM reg where regid = '$_POST[regid]' and pass = '$_POST[pass]'") or die("Invalid Username or Password");
            $query1 = mysqli_query($conn, "SELECT fn FROM reg where regid = '$_POST[regid]' and pass = '$_POST[pass]'");
            $row = mysqli_fetch_array($query) or die(header('Location: mypage.php'));
            $row1 = mysqli_fetch_array($query1);
            if(!empty($row['regid']) AND !empty($row['pass'])) 
            	{ 

            		$_SESSION['regid'] = $row['pass']; echo "Welcome : ";
                    echo $row1[0];
            	} 
            else { header('Location: mypage.php');}
        }
    }
    ?>
</h1>
  <h3 align="center" style="color:#000000;font-size:20px;">Welcome To VTweet </h3>
<form align="LEFT" method = "POST" action="http://localhost/DBMS PROJECT/1/Hostel.php">
<input type="hidden" value = "<?php echo $regid; ?>" name="regid">
<input class="button5" type='submit' value = 'HOSTEL' style="margin-left:250px">
</form>
<form align="center" method = "POST" action="http://localhost/DBMS PROJECT/1/Academic.php">
<input type="hidden" value = "<?php echo $regid; ?>" name="regid">
<input class="button5" type='submit' value = 'ACADEMIC' style="margin-left:250px">
</form>
<form align="RIGHT" method = "POST" action="http://localhost/DBMS PROJECT/1/Campus.php">
<input type="hidden" value = "<?php echo $regid; ?>" name="regid">
<input class="button5" type='submit' value = 'CAMPUS' style="margin-left:250px">
</form>

<section>
  <img class="mySlides" src="imagexx.jpg"
  style="width:100%; height:75%; margin-top: 20px">
  <img class="mySlides" src="image1.jpg"
  style="height:75%; width:100%; margin-top: 20px">
  <img class="mySlides" src="vit.jpg"
  style="height:75%; width:100%; margin-top: 20px">
</section>

<script>

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}
</script>

   </body>
   </html>