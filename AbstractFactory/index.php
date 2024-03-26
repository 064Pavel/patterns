<?php

use AbstractFactory\GtkGuiFactory;
use AbstractFactory\HtmlGuiFactory;

require_once 'HtmlGuiFactory.php';
require_once 'GtkGuiFactory.php';

$htmlFactory = new HtmlGuiFactory();
$htmlButton = $htmlFactory->createButton();
$htmlCheckbox = $htmlFactory->createCheckbox();
echo $htmlButton->render();
echo $htmlCheckbox->render();

$gtkFactory = new GtkGuiFactory();
$gtkButton = $gtkFactory->createButton();
$gtkCheckbox = $gtkFactory->createCheckbox();
echo $gtkButton->render();
echo $gtkCheckbox->render();