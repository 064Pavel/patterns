<?php

namespace AbstractFactory;

require_once 'ButtonInterface.php';
require_once 'CheckboxInterface.php';
interface GuiFactoryInterface
{
    public function createButton(): ButtonInterface;
    public function createCheckbox(): CheckboxInterface;
}