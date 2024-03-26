<?php

namespace AbstractFactory;

require_once 'CheckboxInterface.php';
class GtkCheckbox implements CheckboxInterface
{
    public function render(): string
    {
        return "<gtkcheckbox>GTK Checkbox</gtkcheckbox>" . PHP_EOL;
    }
}