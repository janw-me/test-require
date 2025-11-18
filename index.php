
<?php

$start = microtime(true);
sleep(1);
echo microtime(true) - $start . PHP_EOL;

for ($i = 1; $i <= 10000; $i++) {
    include 'require.php';
}
echo PHP_EOL;
echo microtime(true) - $start;
echo PHP_EOL;
