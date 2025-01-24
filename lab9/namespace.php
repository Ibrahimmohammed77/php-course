<?php

include 'A/Logger.php';
include 'B/Logger.php';

$loggerA = new \A\Logger();
$loggerA->log("This is a log message from LibraryA.");

$loggerB = new \B\Logger();
$loggerB->log("This is a log message from LibraryB.");
