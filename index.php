<?php
require_once('vendor/autoload.php');

use PHPUnit\Util\Test;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Jpgom\RevisandoPhp\logs;
$streamH= new StreamHandler('list.log',Logger::WARNING);
$logger = new Logger('app');

 new logs($logger,$streamH);


?>