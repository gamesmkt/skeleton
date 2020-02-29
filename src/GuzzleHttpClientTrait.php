<?php

namespace FishpondServices\:service_namespace;

use GrahamCampbell\GuzzleFactory\GuzzleFactory;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Illuminate\Log\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as Monolog;

trait GuzzleHttpClientTrait
{
    public function httpHandler(int $backoff = null, array $codes = null, HandlerStack $stack = null)
    {
        $stack = $stack ?: HandlerStack::create();

        $stack->push(Middleware::log(
            self::getLogger(),
            new MessageFormatter(MessageFormatter::DEBUG)
        ));

        return GuzzleFactory::handler($backoff, $codes, $stack);
    }

    public function getLogger()
    {
        $log = new Logger(new Monolog('Http Logger'));
        $logHandler = new StreamHandler('./logs/http.log');
        $log->pushHandler(
            $logHandler->setFormatter(new LineFormatter(null, null, true, true))
        );

        return $log;
    }
}
