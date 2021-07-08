<?php


class Human
{
    /**
     * @throws Exception
     */
    private $armsCount;

    public function setArms($armsCount)
    {
        if ($armsCount <> 2) {
            throw new Exception("Count of arm are not equal to 2!");
        }
        $this->armsCount = $armsCount;
    }

    public function getArms(){
        return $this->armsCount;
    }
}


$human = new Human();
try {
    $human->setArms(2);
} catch (Exception $e) {
    throw new Exception("Count of arm are not equal to 2!");
}
echo $human->getArms();