<?php

/** @var Base $f3 */
$f3 = require_once __DIR__.'/../vendor/bcosca/fatfree/lib/base.php';

$f3->set('DEBUG', 0);

require_once __DIR__.'/../app/config/config.php';

$f3->run();