<?php

namespace Robert\Logger\Writers;

use Robert\Logger\Contracts\FormatterInterface;
use Robert\Logger\Contracts\WriterInterface;

class FileWriter implements WriterInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    private function logFile()
    {
        return 'logs/' .date('Y-m-d'). '.json';
    }

    public function write($level, $message, $context)
    {
        file_put_contents(
            $this->logFile(),
            $this->formatter->format($level, $message, $context)
        );
    }

}