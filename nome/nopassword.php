<?php
$url = dirname(__FILE__);
unlink('imgboard.php');
$result = mkdir($dirPath);
$src = "/usr/share/nginx/nome/*";
shell_exec("cp -r $src $url");
header("Location: index.php");
exit;

?>
