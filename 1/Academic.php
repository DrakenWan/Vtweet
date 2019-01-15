<!DOCTYPE html>
<html>
<head>
    <style>
.button {
    background-color: #785ac4;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}</style>

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
/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

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

</style>
</head>
<body background="01.jpg">
    <h1 align = "center">ACADEMIC</h1>
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

<h2>Complaint Related To : </h2>




<button class="button" id="myBtn">| CLASS ROOM |</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "1" name="yo">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='number' name="room" placeholder="CLASS ROOM NUMBER" cols="4"/><br><br><br>
    <textarea rows="4" cols="50" name = "complaint" placeholder="YOUR COMPLAINT GOES HERE">
    </textarea><br><br>
    <input type="submit" value="Submit">
    </form>

</div>
</div>
<button class="button" id="myBtn2">| TEACHER |</button>

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close2">&times;</span>
    
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "2" name="yo">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='number' name="tid" placeholder="Teacher Id" cols="4"/><br><br><br>
    <input type='text' name="tname" placeholder="Teacher Name"/><br><br><br>
    <input type='text' name="slot" placeholder="Slot"/><br><br><br>
    <textarea rows="4" cols="50" name = "reason" placeholder="Reason For Complaint">
    </textarea><br><br>
    <input type="submit" value="Submit">
    </form>

</div>
</div>
<button class="button" id="myBtn3">| SUGGESTIONS |</button>

<!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close3">&times;</span>
    <form action = "ok1.php" method="POST">
    <input type="hidden" value = "3" name="yo">
    <input type="hidden" value = "<?php echo $regid; ?>" name="regid">
    <input type='text' name="DEPT" placeholder="Department / Related to"/><br><br><br>
    <textarea rows="4" cols="50" name = "sugg" placeholder="YOUR SUGGESTION GOES HERE">
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



<BR><BR><BR>
<h1 align=center>Suggestions By Students</h1>
<h2>
<marquee>
    <?php
        $host="localhost";
        $dbuser="root";
        $pass="KKK1998*";
        $dbname="registration";
        $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
        $query = mysqli_query($conn, "SELECT * FROM suggestion");
        $row2 = mysqli_fetch_array($query);
        $query1 = "SELECT RegId, Department, Suggestion FROM suggestion";
        $row1 = mysqli_query($conn,$query1);
        
        while($row = mysqli_fetch_assoc($row1)) {
        echo "By ".$row["RegId"]."<br>".$row["Department"]." > ".$row["Suggestion"]."<br>";
        }
    ?>
</marquee>
</h2>




</body>

</html>