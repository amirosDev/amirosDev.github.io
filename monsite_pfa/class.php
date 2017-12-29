<?php
use Kachkaev\PHPR\RCore;
use Kachkaev\PHPR\Engine\CommandLineREngine;

$r = new RCore(new CommandLineREngine('/path/to/R'));

$result = $r->run(<<<EOF
x = 1
y = 2
x + y
x + z
x - y
EOF
    );

echo $result;