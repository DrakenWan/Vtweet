<?php
if(isset($_POST['Submit']))
{
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $comp=$_POST['comp'];
        $regid=$_POST['regid'];
        $dept=$_POST['dept'];
        $block=$_POST['block'];
        $room=$_POST['room'];
        $sql="insert into hostel(regid,comp,dept,block,room_no)"."values('$regid','$comp','$dept','$block','$room')";
        $repasses=mysqli_query($conn,$sql);
}?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color:#180e38;
    border: none;
    color: white;
    padding: 10px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}</style>
</head>
<body background="01.jpg">
    <h1 align = "center">HOSTEL</h1>
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



<form action = "" method="POST">
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
<input class="button "type="submit" name="Submit">
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
        echo $row["dept"]."   :  ".$row["comp"]."<br>";

    }
      
        
       
      
    }
    else
    {echo "NO RECORD";}
?>
</h2>
</body>

</html>