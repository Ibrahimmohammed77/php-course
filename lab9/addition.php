<?php

// with out nameSpace
// Main file
include 'A/Logger.php';
include 'B/Logger.php';

// $logger = new Logger(); // Which Logger is this? Leads to a conflict!
$logger->log("This is a log message.");

// with nameSpace
include 'A/Logger.php';
include 'B/Logger.php';

$loggerA = new \A\Logger();
$loggerA->log("This is a log message from LibraryA.");

$loggerB = new \B\Logger();
$loggerB->log("This is a log message from LibraryB.");
