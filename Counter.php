<?php
$cfg['file'] = "counter.txt";
$cfg['read'] = file_get_contents($cfg['file']);

if(!isset($_COOKIE['counter'])) {
    setcookie('counter', 'counter', time() + 3600);
    define('COUNTER', 'counter.txt');

    if(file_exists(COUNTER)) 
    { 
        $f = fopen(COUNTER, "r"); 
        flock($f, 1);
        $result = fgets($f, 100);
        flock($f, 3); 
        fclose($f);
        $result++; 
    } 
    else
    {
        $result = 1;
    }
    $f = fopen(COUNTER, "w"); 
    flock($f, 2); 
    fwrite($f, $result);
    flock($f, 3);
    fclose($f);
    }

    echo ($cfg['read']);
?>