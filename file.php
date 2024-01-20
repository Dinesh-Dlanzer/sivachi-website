<?php
$data=$_POST['data'];
$file = fopen("test.txt","w");
echo fwrite($file,$data);
fclose($file);
 echo json_encode($data);
?> 