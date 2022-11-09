<?php

namespace Robert\Logger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    protected $writers;

    public function __construct(array $writers)
    {
        $this->writers = $writers;
    }

    private function format($level, $message, array $context): void
    {
        foreach ($this->writers as $writer) {
            $writer->write($level, $message, $context);
        }
    }

    public function write($level, $message, $context)
    {
        $this->format($level, $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        $this->write($level, $message, $context);
    }
}