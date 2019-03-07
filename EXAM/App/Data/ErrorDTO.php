<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 30.10.18
 * Time: 22:00
 */

namespace App\Data;


class ErrorDTO
{
    private $message;

    /**
     * ErrorDTO constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }


}