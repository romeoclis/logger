<?php

namespace Robert\Logger\Formatters;

use Robert\Logger\Contracts\FormatterInterface;

class DbFormatter extends AbstractFormatter
{
    public function format($level, $message, $context)
    {
        file_put_contents($this->logFile, strtr($this->template, [
            '{date}' => $this->getDate(),
            '{level}' => $level,
            '{message}' => $message,
            '{context}' => $this->contextStringify($context),
        ]), FILE_APPEND);
    }

    public function contextStringify(array $context = [])
    {
        return !empty($context) ? json_encode($context) : null;
    }

    public function getDate()
    {
        return (new \DateTime())->format($this->dateFormat);
    }
}