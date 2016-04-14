<?PHP
$folder = $_POST['folder'];
$dirPath = '/usr/share/nginx/html/'.$folder;
$result = mkdir($dirPath);
$src = "/usr/share/nginx/nome/*";
shell_exec("cp -r $src $dirPath");
// Blank submit
if ($_POST['folder'] == "")
{
echo "You forgot to enter a board name :3";
unlink('password.php');
unlink('nd.zip');
unlink('delete.php');
unlink('nopassword.php');

exit;
}

//If rules are broke... ;-;

function check_forbidden($forbiddennames, $stringtocheck) 
{
    foreach ($forbiddennames as $name) {
        if (stripos($stringtocheck, $name) !== FALSE) {
            return true;
        }
    }
}

$forbiddennames= array(1 => 'child', 'cp', 'pedo', 'murder', 'rape', 'nig', 'jailbait');

if(check_forbidden($forbiddennames, $folder)) {
    echo "$folder can`t be created";
    shell_exec("rm -R $folder");
}
//Everything goes smoothie
else {
echo "<meta http-equiv='refresh' content='0; url=$folder' />";
      }
?>
