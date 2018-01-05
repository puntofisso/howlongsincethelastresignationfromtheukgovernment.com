<?php

$name=$_GET['name'];
$date=$_GET['date'];
$time=$_GET['time'];



$myfile = fopen("../resignation.php", "w");



fwrite($myfile, '<?php');
fwrite($myfile, "\n");
fwrite($myfile, 'echo \'resignationName = "'.$name.'";\';');
fwrite($myfile, "\n");
fwrite($myfile, 'echo \'resignationDateS = "'.$date.'";\';');
fwrite($myfile, "\n");
fwrite($myfile, 'echo \'resignationTimeS = "'.$time.'";\';');
fwrite($myfile, "\n");
fwrite($myfile, '?>');
fclose($myfile);

chmod("../resignation.php", 0755);

?>
