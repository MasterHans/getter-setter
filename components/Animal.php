<?php


namespace app\components;

use yii\base\BaseObject;

/**
 * Class Animal
 * @package app\components
 * @property $legs
 * @property $horns
 */
class Animal extends BaseObject
{
    private $legs;
    private $horns;

    /**
     * @return int
     */
    function getLegs()
    {
        return $this->legs;
    }

    /**
     * @return int
     */
    function getHorns()
    {
        return $this->horns;
    }

    /**
     * @param $value
     * @return int
     */
    function setHorns($value)
    {
        return $this->horns = $value;
    }

    /**
     * @param $value
     * @return int
     */
    function setlegs($value)
    {
        return $this->legs = $value;
    }
}