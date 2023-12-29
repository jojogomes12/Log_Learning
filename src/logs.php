<?php
 namespace Jpgom\RevisandoPhp;
 use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class logs{

    public function __construct(Logger $log,StreamHandler $streamHandler){

        $log->pushHandler($streamHandler);
        $log->warning('LOGS TEST');
        $log->error("Com composer");

    }
}
?>