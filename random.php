<?php

$filename = 'random.dat';
$filesize = 2 * 1024 * 1024;

$start = microtime(true);
$handle = fopen($filename, 'w');

for ($i = 0; $i < $filesize; $i++) {
  fwrite($handle, chr(rand(0, 255)));
}

fclose($handle);

$end = microtime(true);
$time = $end - $start;

echo "Runtime: {$time}s\n";
