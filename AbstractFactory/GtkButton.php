<?php

namespace AbstractFactory;

require_once 'ButtonInterface.php';
class GtkButton implements ButtonInterface
{
    public function render(): string
    {
        return "<gtkbutton>GTK Button</gtkbutton>" . PHP_EOL;
    }
}