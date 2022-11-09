<?php

namespace Robert\Logger\Writers;

class FileWriter extends AbstractWriter
{
    public function write($level, $message, $context)
    {
       return $this->formatter->format($level, $message, $context);
    }
}