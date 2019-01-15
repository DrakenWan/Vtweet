<!DOCTYPE html>
<html>
<head>
<style>

.button5 {

  padding: 10px 30px;
  border: none;
  background-color: #80ddf7;
  border-radius: 20%;
  cursor: pointer;
  box-shadow: 0 9px #66b4c9;

}
.button5:active {
  background-color: #73cae2;
  box-shadow: 0 5px #5da4b7;
  transform: translateY(4px);
}
.button {
	background-color: #785ac4;
	border: none;
	color: white;
	padding: 15px 40px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	-webkit-transition-duration:0.4s; /*Safari*/
	transition-duration:0.4s;
	  height: 60px;
	  width: 120px;
	  border-radius: 30%;
}
.button2:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<style>
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal1 {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal2 {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal3 {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal4 {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal-content {
    background-color: white;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.close3 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.close4 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close4:hover,
.close4:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body BACKGROUND="01.JPG">
	<h1 align = "center">Campus</h1>
	<h1 style="background-color:#666b72 ; color:#872727;">
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
    <BR><BR>
	
	<div style="position:absolute; left:40px; top:150px;">
	<button class="button button2" id="myBtn">Library</button></a>
    </div>
    <div id="myModal" class="modal">
	<div class="modal-content">
    <span class="close">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "4" name="yo">
    <input type="hidden" value = "Library" name="dept">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="issue" placeholder="ISSUE" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "comp" placeholder="Details / More about the issue">
	</textarea><br><br>
    <input type="submit" value="Submit">
    </form>
</div>
</div>


<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


	<div style="position:absolute; left:40px; top:240px;">
	<button class="button button2" id="myBtn1">Sports Club</button></a>
    </div>
    <div id="myModal1" class="modal1">
	<div class="modal-content">
    <span class="close1">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "4" name="yo">
    <input type="hidden" value = "Sports_Club" name="dept">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="issue" placeholder="ISSUE" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "comp" placeholder="Details / More about the issue">
	</textarea><br><br>
    <input type="submit" value="Submit">
    </form>
</div>
</div>


<script>
var modal1 = document.getElementById('myModal1');
var btn = document.getElementById("myBtn1");

var span = document.getElementsByClassName("close1")[0];

btn.onclick = function() {
    modal1.style.display = "block";
}

span.onclick = function() {
    modal1.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>


	<div style="position:absolute; left:40px; top:330px;">
	<button class="button button2" id="myBtn2">Vmart</button></a>
    </div>
    <div id="myModal2" class="modal2">
	<div class="modal-content">
    <span class="close2">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "Vmart" name="dept">
    <input type="hidden" value = "4" name="yo">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="issue" placeholder="ISSUE" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "comp" placeholder="Details / More about the issue">
	</textarea><br><br>
    <input type="submit" value="Submit">
    </form>
</div>
</div>


<script>
var modal2 = document.getElementById('myModal2');
var btn = document.getElementById("myBtn2");

var span = document.getElementsByClassName("close2")[0];

btn.onclick = function() {
    modal2.style.display = "block";
}

span.onclick = function() {
    modal2.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>



	<div style="position:absolute; left:40px; top:420px;">
	<button class="button button2" id="myBtn3">Food Park</button></a>
    </div>
    <div id="myModal3" class="modal2">
	<div class="modal-content">
    <span class="close3">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "4" name="yo">
    <input type="hidden" value = "Food_Park" name="dept">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="issue" placeholder="ISSUE" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "comp" placeholder="Details / More about the issue">
	</textarea><br><br>
    <input type="submit" value="Submit">
    </form>
</div>
</div>


<script>
var modal3 = document.getElementById('myModal3');
var btn = document.getElementById("myBtn3");

var span = document.getElementsByClassName("close3")[0];

btn.onclick = function() {
    modal3.style.display = "block";
}

span.onclick = function() {
    modal3.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
</script>



	<div style="position:absolute; left:40px; top:510px;">
	<button class="button button2" id="myBtn4">ATM</button></a>
    </div>
    <div id="myModal4" class="modal4">
	<div class="modal-content">
    <span class="close4">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "4" name="yo">
    <input type="hidden" value = "ATM" name="dept">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="issue" placeholder="ISSUE" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "comp" placeholder="Details / More about the issue">
	</textarea><br><br>
    <input type="submit" value="Submit">
    </form>
</div>
</div>


<script>
var modal4 = document.getElementById('myModal4');
var btn = document.getElementById("myBtn4");

var span = document.getElementsByClassName("close4")[0];

btn.onclick = function() {
    modal4.style.display = "block";
}

span.onclick = function() {
    modal4.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
</script>

<h1 align=right>PREVIOUS COMPLAINTS</h1>
<h2 align=right>
<?php
        $host="localhost";
        $dbuser="root";
        $pass="";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM Campus where Reg_Id = '$_POST[regid]'");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT Campus_Dept,Issue FROM Campus where Reg_Id = '$_POST[regid]'";
        $row1 = mysqli_query($conn,$query1);
        if(!empty($row2['Reg_Id'])){
        while($row = mysqli_fetch_assoc($row1)) {
        echo $row["Campus_Dept"]."   :  ".$row["Issue"]."<br>";

    }
      
        
       
      
    }
    else
    {echo "NO RECORD";}
?>
</h2>



</body>
</html>