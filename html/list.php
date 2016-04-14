<!DOCTYPE html>
<html lang="en">
<body>
<?php
$Mydir = ''; ### OR MAKE IT 'yourboardsdirectory/';

foreach(glob($Mydir.'*', GLOB_ONLYDIR) as $dir) {
    $dir = str_replace($Mydir, '', $dir);
    echo "<a class='buttons' href='$dir'><button type='button' class='btn btn-primary'>$dir</button></a>";
}
?>

</body>
</html>

