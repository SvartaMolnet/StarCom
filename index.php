<html>
<head><title>StarCom</title>
<meta charset="utf-8">
<!--<link rel="stylesheet" type="text/css" href="login.css">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
#div {
  background-color: green;
}
#div2 {
  background-color: lightblue;
}
	div.color {
		background-color: green;
	}
	.jumbotron {
    background-image: url("starcitizenimg.jpg");

    /*background-color:lightblue !important; */
}
</style>

<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="LogIn" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">LogIn @ StarCom</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd">
</div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn-primary">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <p> Response </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Apply">Open Small Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="Apply" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Apply for access to StarCom</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
  <form action="createUser.php" method="post">
  First name:<br>
  <input type="text" name="firstname" id="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname" id="lastname">
  <br>
  Nickname:<br>
  <input type="text" name="nickname" id="Nickname">
  <br>
  Enter password:<br>
  <input type="text" name="password" id="Password">
  <br>
  <!--Password again:<br>
  <input type="text" name="password2">-->
  <br><br>
  <input type="submit" value="Submit">
</form>
</div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn-primary">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <p> Response </p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- EN ANDRA LOGINLÖSNING BÖRJAR HÄR -->

<!--<h2>Modal Login Form</h2>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- EN ANDRA LOGINLÖSNING SLUTAR HÄR -->
	
	<div class="container">
  <div class="jumbotron">
  <div class="row">
  <div class="col-sm-8">
    <h1>StarCom</h1>      
    <div class="well">This is a site where you plan your endevours in space</div>
  </div>
  <div class="col-sm-4">
  	<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#LogIn">Login</button>
    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Apply">Apply</button><br>Profile<br><br>

<!--    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->
  </div>
</div>
  </div>
  <!--<p>This is some text.</p>      
  <p>This is another text.</p>-->      
</div> <!-- END OF JUMBOTRON --> 
<div class="row">
  <div class="col-sm-4" id="div">.col-sm-4</div>
  <div class="col-sm-8" id="div2">
  <table>
    <tr><td>
      .col-sm-8
    </td></tr>
    <tr><td>
      <canvas id="myCanvas" width="200" height="100"
      style="border:1px solid #c3c3c3;">
      Your browser does not support the canvas element.
      </canvas>
      <script>
      var canvas = document.getElementById("myCanvas");
      var ctx = canvas.getContext("2d");
      var x = Math.floor(Math.random() * 201);
      ctx.fillStyle = "#FF0000";
      ctx.fillRect(0,0,x,100);
      ctx.fillStyle = "#FFFF00";
      ctx.font = "30px Arial";
      ctx.fillText(x + "px",10,50);
      </script>
    </td></tr>
  </table>
  </div>
</div>

</body>
</html>