<?php

namespace AbstractFactory;

require_once 'GuiFactoryInterface.php';
require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';
require_once 'GtkButton.php';
require_once 'GtkCheckbox.php';
class GtkGuiFactory implements GuiFactoryInterface
{
    public function createButton(): ButtonInterface
    {
        return new GtkButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new GtkCheckbox();
    }
}