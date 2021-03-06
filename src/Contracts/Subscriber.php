<?php

namespace Laratrade\GDAX\WebSocket\Contracts;

use Exception;
use Ratchet\Client\WebSocket;
use Ratchet\RFC6455\Messaging\MessageInterface as MessageContract;
use React\Promise\PromiseInterface as PromiseContract;

interface Subscriber
{
    /**
     * Handle the connect event.
     *
     * @param WebSocket $webSocket
     *
     * @return void
     */
    public function onConnect(WebSocket $webSocket): void;

    /**
     * Handle the message event.
     *
     * @param MessageContract $message
     *
     * @return void
     */
    public function onMessage(MessageContract $message): void;

    /**
     * Handle the disconnect event.
     *
     * @param int|null    $code
     * @param string|null $reason
     *
     * @return void
     */
    public function onDisconnect(int $code = null, string $reason = null): void;

    /**
     * Handle the error event.
     *
     * @param Exception $exception
     *
     * @return void
     */
    public function onError(Exception $exception): void;

    /**
     * Register the listeners for the subscriber.
     *
     * @param PromiseContract $connection
     */
    public function subscribe(PromiseContract $connection): void;
}
