--TEST--
Object access
--FILE--
<?php
a->b;
a->b['c'];
a->b{'c'};
a->b();
a->{'b'}();
a->b();
a->b['c']();
a->b()['c'];
a->b(){'c'}; 
--EXPECT--
<?php
$a->b;
$a->b['c'];
$a->b{'c'};
$a->b();
$a->{'b'}();
$a->$b();
$a->$b['c']();
$a->b()['c'];
$a->b(){'c'}; 