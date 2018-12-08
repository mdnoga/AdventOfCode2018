#!/usr/bin/env php
<?php

use AdventOfCode\lib\Bootstrap;

require_once './vendor/autoload.php';

$bootstrap = new Bootstrap();
// usage: php runner.php [day]
$bootstrap->runDay($argv[1] ?? null);