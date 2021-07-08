<?php

namespace app\components;

use http\Exception;

class Human
{
    /**
     * @throws Exception
     */
    private $armsCount;
    private $property;


    public function setArms($armsCount)
    {
        if ($armsCount <> 2) {
            throw new \Exception("Count of arm are not equal to 2!");
        }
        $this->armsCount = $armsCount;
    }

    public function getArms()
    {
        return $this->armsCount;
    }

    public function __get($property)
    {
        if ($property == 'legs') {
            return $this->property;
        }

    }

    public function __set($property, $value)
    {
        if ($property == 'legs') {
            $this->property = $value;
        }
    }
}