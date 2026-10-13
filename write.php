<?php

$file = fopen("sample.txt", "w");

fwrite($file, "Welcome to PHP Programming.");

fclose($file);

echo "File created and data written successfully.";

?>