<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1 style="background-color: black; color: blue;">
      <?php
      $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        echo "Welcome : ";
        $regid = $_POST['regid'];
        $query1 = mysqli_query($conn, "SELECT fn FROM reg where regid = '$regid'");
        $row1 = mysqli_fetch_array($query1);
        $fn = $row1[0];
        echo $fn;
      ?>
    </h1>



<form action = "ok.php" method="POST">
<input type="hidden" value = "<?php echo $regid; ?>" name="regid">
<select name='dept'>
  <option value="Not Mentioned">COMPLAIN RELATED TO</option>
  <option value="Mess">MESS</option>
  <option value="Room">ROOM</option>
  <option value="Washroom">WASHROOM</option>
  <option value="Wifi">WIFI</option>
</select><br><br><br>
<select name='block'>
  <option value="Not Mentioned">CHOOSE BLOCK</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="G">GIRL'S HOSTEL</option>
</select><br><br><br>
<input type='number' name="room" placeholder="ROOM NUMBER" cols="4"/><br><br><br>
<textarea rows="4" cols="50" name = "comp" placeholder="YOUR COMPLAINT GOES HERE">
</textarea><br><br>
<input type="submit" value="Submit">
</form>
<h1 align=center>PREVIOUS COMPLAINTS</h1>
<h2 align=center>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM hostel where regid = '$_POST[regid]'");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT comp, dept FROM hostel where regid = '$_POST[regid]'";
        $row1 = mysqli_query($conn,$query1);
        if(!empty($row2['regid'])){
        while($row = mysqli_fetch_assoc($row1)) {
        echo $row["dept"]."   ==>  ".$row["comp"]."<br>";

    }
      
        
       
      
    }
    else
    {echo "NO RECORD";}
?>
</h2>
</body>

</html>











<form action = "ok.php" method="POST">
<input type="hidden" value = "<?php echo $regid; ?>" name="regid">
<h2>Complaint Related To : </h2>
  <input type="radio" name="DEPT" value="CLASS"> CLASS ROOM<br>
  <input type="radio" name="DEPT" value="LAB"> LAB<br>
  <input type="radio" name="DEPT" value="TEACHER"> TEACHER <br><br><br>


<select name='block'>
  <option value="Not Mentioned">CHOOSE BLOCK</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="G">GIRL'S HOSTEL</option>
</select><br><br><br>
<input type='number' name="room" placeholder="ROOM NUMBER" cols="4"/><br><br><br>
<textarea rows="4" cols="50" name = "comp" placeholder="YOUR COMPLAINT GOES HERE">
</textarea><br><br>
<input type="submit" value="Submit">
</form>






<h2 align=center>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM hostel where regid = '$_POST[regid]'");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT comp, dept FROM hostel where regid = '$_POST[regid]'";
        $row1 = mysqli_query($conn,$query1);
        if(!empty($row2['regid'])){
        while($row = mysqli_fetch_assoc($row1)) {
        echo $row["dept"]."   ==>  ".$row["comp"]."<br>";

    }
      
    }
    else
    {echo "NO RECORD";}
?>
</h2>
