<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 8.11.18
 * Time: 10:53
 */

namespace Core;
//include 'TemplateInterface.php';

class Template implements TemplateInterface
{
    const TEMPLATE_DIRECTORY = 'App/Templates/';
    const TEMPLATE_EXTENSION = '.php';

    public function render(string $templateName, $data = null)
    {
        require_once self::TEMPLATE_DIRECTORY
        . $templateName
            . self::TEMPLATE_EXTENSION;
    }
}