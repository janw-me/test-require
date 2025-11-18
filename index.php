
<?php

$start = microtime(true);
sleep(1);
echo microtime(true) - $start;

for ($i = 1; $i <= 10; $i++) {
    require 'require.php'
}
echo microtime(true) - $start;
