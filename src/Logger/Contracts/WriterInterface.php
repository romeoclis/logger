<?php

namespace Robert\Logger\Contracts;

interface WriterInterface
{
    public function write($level, $message, $context);
}