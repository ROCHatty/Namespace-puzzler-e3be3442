<?php

include_once "ConsoleLogger.class.php";
include_once "FileLogger.class.php";
include_once "UI.helpers.php";

/*  ONLY EDIT CODE BELOW

....

    ONLY EDIT CODE ABOVE */

use Console\Logger as Logger;
use File\Logger as FileLogger;
use function UI\getInputFromUser as getInputFromUser;

$logger = new Logger();
$fileLogger = new FileLogger();

$message = getInputFromUser();

$logger->log($message);
$fileLogger->logToFile($message);
