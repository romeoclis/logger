<?php

namespace Robert\Logger\Contracts;

interface FormatterInterface
{
    public function format($level, $message, $context);
}