<?php
require './shortyS3.php';
require './config.php';

$shorty = new ShortyS3($hostname, $s3config, $bucket);

$shorty->set_chars($chars);
$shorty->set_salt($salt);
$shorty->set_padding($padding);

$shorty->run();
?>
