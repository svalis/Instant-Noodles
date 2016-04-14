<?php
$deletedFormat = $_POST['folder'];
$msgid = $_GET['msgid'];
$oldMessage = "stupidasspassword";
//read the entire string
$str=file_get_contents('nowpassword.txt');

//replace something in the file string - this is a VERY simple example
$str=str_replace("$oldMessage", "$deletedFormat",$str);

//write the entire string
file_put_contents('imgboard.php', $str);
?>
<?php if (count($_POST)>0) echo "<div class='alert alert-success'><b>Password set!</b> You can now proceed to your newly created board. <a href='delete.php'>Click here to continue</a></div>"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Default &#149; Create your own imageboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap.min.css">
  <script src="../jquery.min.js"></script>
  <script src="../bootstrap.min.js"></script>

</head>
</br>
<div class="container">
<h1>One last thing...</h1>
<p>Set a password for your board</p>
<form method="post" action="" id="1">
<input type="password" name="folder" id="folder" >
<button  id="main" type="submit" form="1" value="Submit"  class="btn btn-primary btn-sm">Set</button>
</form>
</br>
</br>
