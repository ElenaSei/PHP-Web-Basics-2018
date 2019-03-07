<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 8.11.18
 * Time: 12:41
 */

namespace App\Http;

use Core\TemplateInterface;

abstract class HttpHandlerAbstract
{
    /**
     * @var TemplateInterface
     */
    private $template;

    /**
     * HttpHandlerAbstract constructor.
     * @param TemplateInterface $template
     */
    public function __construct(TemplateInterface $template)
    {
        $this->template = $template;
    }

    public function render($templateName, $data = null){
        $this->template->render($templateName, $data);
    }

    public function redirect($url){
        header("Location: $url");
    }

}