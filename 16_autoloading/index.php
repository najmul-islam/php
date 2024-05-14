<?php
// require_once "./app/Email.php";
// require_once "./app/Person.php";
require_once "./vendor/autoload.php";

use app\Email;
use app\Person;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$email = new Email();
$person = new Person();

$log = new Logger("name");
$log->pushHandler(new StreamHandler("output.log", Logger::WARNING));

$log->warning("Foo");
$log->error("BAR");