 <?php
function get_random_dir($base_dir)
{
  $dirs = glob(sprintf('%s/*',$base_dir),GLOB_ONLYDIR);

  return empty($dirs) ? null : $dirs[array_rand($dirs)];
}
$i = get_random_dir('.');
$i2 = get_random_dir('.');
$i3 = get_random_dir('.');
$i4 = get_random_dir('.');
$i5 = get_random_dir('.');
$i6 = get_random_dir('.');
echo "<div class='img'><a target='_blank' href='$i'><img src='$i/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i'>$i/</a></div></div>";
echo "<div class='img'><a target='_blank' href='$i2'><img src='$i2/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i2'>$i2/</a></div></div>";
echo "<div class='img'><a target='_blank' href='$i3'><img src='$i3/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i3'>$i3/</a></div></div>";
echo "<div class='img'><a target='_blank' href='$i4'><img src='$i4/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i4'>$i4/</a></div></div>";
echo "<div class='img'><a target='_blank' href='$i5'><img src='$i5/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i5'>$i5/</a></div></div>";
echo "<div class='img'><a target='_blank' href='$i6'><img src='$i6/src/hm.php' alt='Random Image' class='img-rounded'></a><div class='desc'>Random image from: <a href='$i6'>$i6/</a></div></div>";

?> 
