<?php

namespace Robert\Logger\Formatters;

use Robert\Logger\Contracts\FormatterInterface;

class FileFormatter implements FormatterInterface
{
    protected $template = "{date} {level} {message} {context}";

    public function format($level, $message, $context)
    {
        return strtr($this->template, [
                '{date}' => date('Y-m-d H:i:s'),
                '{level}' => $level,
                '{message}' => $message,
                '{context}' => $this->contextStringify($context),
            ]) . PHP_EOL;
    }

    public function contextStringify(array $context = [])
    {
        return !empty($context) ? json_encode($context) : null;
    }
}