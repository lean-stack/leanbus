<?php

namespace Lean\Bus;

class MessageBus implements MiddlewareInterface {

    public function __invoke(object $message, callable $next = null) {
        
    }
}
