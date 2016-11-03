<?php

namespace Lean\Bus;

interface MiddlewareInterface {
   
    public function __invoke(object $message, callable $next = null);
}
