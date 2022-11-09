<?php

namespace Robert\Logger\Writers;

use Robert\Logger\Contracts\FormatterInterface;
use Robert\Logger\Contracts\WriterInterface;

class AbstractWriter implements WriterInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function write($level, $message, $context)
    {
        // TODO: Implement write() method.
    }
}