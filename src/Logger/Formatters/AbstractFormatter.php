<?php

namespace Robert\Logger\Formatters;

use Robert\Logger\Contracts\FormatterInterface;

abstract class AbstractFormatter  implements FormatterInterface
{
    protected $template = "{date} {level} {message} {context}";

    protected $dateFormat;

    protected $logFile;

    public function __construct(string $dateFormat, string $logFile)
    {
        $this->dateFormat = $dateFormat;
        $this->logFile = $logFile;
    }

}