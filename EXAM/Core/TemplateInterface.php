<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 30.10.18
 * Time: 22:02
 */

namespace Core;


interface TemplateInterface
{
    public function render(string $templateName, $data = null);
}