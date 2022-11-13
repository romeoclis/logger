<?php

namespace Robert\Logger;

use Psr\Log\AbstractLogger;

use Robert\Logger\Contracts\WriterInterface;

class Logger extends AbstractLogger
{
    protected $writer;

    public function __construct(WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    private function write($level, $message, array $context): void
    {
        $this->writer->write($level, $message, $context);
    }

    public function log($level, $message, array $context = [])
    {
        $this->write($level, $message, $context);
    }
}

