--TEST--
Exit
--FILE--
<?php
exit;
exit();
exit('Die!');
die;
die();
die('Exit!');
--EXPECT--
<?php
exit;
exit();
exit('Die!');
die;
die();
die('Exit!');