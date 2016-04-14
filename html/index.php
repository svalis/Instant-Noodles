<!DOCTYPE html>
<html lang="en">
<head>
  <title>Default &#149; Create your own imageboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<script type="text/JavaScript">
function valid(f) {
f.value = f.value.replace(/[^a-z\u00D1\u00F10-9]*/ig,'');
}
</script>
<body>
</br>
</br>
</br>
<div class="container">

<h1>Default~</h1>
<h3>Host your own imageboard forum!</h3>

<br>
<p>Create your own board below!</p>
<small>(Enter numbers below)</small>

<form action="validate.php" method="post">
<input name="captcha" type="text">
<img src="captcha.php" /><br>


<script language="javascript"> 
function toggle() {
    var ele = document.getElementById("toggleText");
    var text = document.getElementById("displayText");
    if(ele.style.display == "block") {
        ele.style.display = "none";
        text.innerHTML = "Show";
    } else {
        ele.style.display = "block";
        text.innerHTML = "Hide";
    }
} 
</script>

<h3><a id="displayText" href="javascript:toggle();">Click here to display all boards</a></h3>
<div id="toggleText" style="display: none"><?php include 'list.php';?></div>

</br>
<div class="row">
    <div class="col-xs-12 col-sm-7">
      <h3>Random boards</h3>
<?php include 'boards2.php';?>
    </div>
    <div class="col-xs-12 col-sm-5">
 <h3>Other links:</h3>

      <h3>Server cost:</h3>
            <div class="progress">
        <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 90.00%;"></div>
      </div>
      <p><strong>Money so far</strong>: $50.00</p>
      <p><strong>Goal</strong>: $60.00</p>
<p>
        We will never ask you for donations, but if you like the service feel free to click the qr code!
      </p>
</div>
  </div>
</br>
</br>
</div>
</br>
</br>
</br>

