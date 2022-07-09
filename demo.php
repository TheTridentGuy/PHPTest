<?php
$fh = fopen("testfile.txt", "w+") or die("File Error");
$text = <<< _END
this is text
_END;

fwrite($fh, $text) or die("Write Error");
$resp = fread($fh, 12);
fclose($fh);
echo "It Worked: " + $resp;
?>