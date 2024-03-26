<?php

namespace AbstractFactory;

require_once 'CheckboxInterface.php';
class HtmlCheckbox implements CheckboxInterface
{
    public function render(): string
    {
        return "<input type='checkbox'>HTML Checkbox</input>" . PHP_EOL;
    }
}
