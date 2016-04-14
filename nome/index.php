<?php
$filename = 'imgboard.php';

if (file_exists($filename)) {
header( 'Location: ../exists.php' ) ;
unlink(__FILE__);
unlink('password.php');
unlink('nd.zip');
} else {
// assuming file.zip is in the same directory as the executing script.
$file = 'nd.zip';

// get the absolute path to $file
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
  $zip->extractTo($path);
  $zip->close();
}
$deletedFormat = $_POST['folder'];
$msgid = $_GET['msgid'];
$oldMessage = "stupidassboard";
//Check if illegal

function check_forbidden($forbiddennames, $stringtocheck)
{
    foreach ($forbiddennames as $name) {
        if (stripos($stringtocheck, $name) !== FALSE) {
            return true;
        }
    }
}

$forbiddennames= array(1 => 'child', 'cp', 'pedo', 'murder', 'rape', 'nig', 'jailbait');

if(check_forbidden($forbiddennames, $deletedFormat)) {
    echo "<div class='alert alert-danger'><strong>Error!</strong> Could not name board $deletedFormat, bad name.</div>";
}
else{

//read the entire string
$str=file_get_contents('boardname.txt');

//replace something in the file string - this is a VERY simple example
$str=str_replace("$oldMessage", "$deletedFormat",$str);
//write the entire string
file_put_contents('nowpassword.txt', $str);
if (count($_POST)>0) echo "<meta http-equiv='refresh' content='0;password.php'>";
}
}
?>

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
<h1>Now its time to name your board:</h1>
<p>This will display ontop of your board at all times.</p>
<form method="post" action="" id="1">
<input type="text" name="folder" id="folder" >
<button  id="main" type="submit" form="1" value="Submit"  class="btn btn-primary btn-sm">Set</button>

</form>
</br>
</br>

