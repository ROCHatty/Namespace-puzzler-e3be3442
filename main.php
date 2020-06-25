<?php

include_once "ConsoleLogger.class.php";
include_once "FileLogger.class.php";
include_once "UI.helpers.php";

/*  ONLY EDIT CODE BELOW

....

    ONLY EDIT CODE ABOVE */

$logger = new Console\Logger();
$fileLogger = new File\Logger();

$message = UI\getInputFromUser();

$logger->log($message);
$fileLogger->logToFile($message);
