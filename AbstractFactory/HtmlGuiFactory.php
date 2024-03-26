<?php

namespace AbstractFactory;

require_once 'GuiFactoryInterface.php';
require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';
require_once 'HtmlButton.php';
require_once 'HtmlCheckbox.php';
class HtmlGuiFactory implements GuiFactoryInterface
{
    public function createButton(): ButtonInterface
    {
        return new HtmlButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new HtmlCheckbox();
    }
}