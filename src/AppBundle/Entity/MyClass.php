<?php

namespace AppBundle\Entity;

/**
 * MyClass
 */
class MyClass
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var integer
     */
    protected $number;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}