<?php
class DecimalNumber{
    public $num;

    /**
     * DecimalNumber constructor.
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function reverseNum(){
        return strrev($this->num);
    }

}

$num = readline();

$reverseNum = new DecimalNumber($num);
echo $reverseNum->reverseNum();