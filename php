<?php
  // Opening a file
  $file = fopen("example.txt", "r");

  // Reading and outputting file content
  while(!feof($file)) {
    echo fgets($file) . "<br>";
  }

  // Closing the file
  fclose($file);
?>
