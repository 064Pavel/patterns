<?php

namespace AbstractFactory;

require_once 'ButtonInterface.php';
class HtmlButton implements ButtonInterface
{
    public function render(): string
    {
        return "<button>HTML Button</button>" . PHP_EOL;
    }
}