<?php

/**
 * Class Net_HL7_Types_CE
 *

 */
class Net_HL7_Types_CE
{


    private $identifier;
    private $text;
    private $nameOfCodingSystem;
    private $alternateIdentifier;
    private $alternateTest;
    private $nameOfAlternateCodingSystem;

    public function __construct($paramArray)
    {

        $this->identifier = $paramArray[0];
        $this->text = $paramArray[1];
        $this->nameOfCodingSystem = $paramArray[2];
        $this->alternateIdentifier = $paramArray[3];
        $this->alternateTest = $paramArray[4];
        $this->nameOfAlternateCodingSystem = $paramArray[5];

    }

    /**
     * @param mixed $alternateIdentifier
     */
    public function setAlternateIdentifier($alternateIdentifier)
    {
        $this->alternateIdentifier = $alternateIdentifier;
    }

    /**
     * @return mixed
     */
    public function getAlternateIdentifier()
    {
        return $this->alternateIdentifier;
    }

    /**
     * @param mixed $alternateTest
     */
    public function setAlternateTest($alternateTest)
    {
        $this->alternateTest = $alternateTest;
    }

    /**
     * @return mixed
     */
    public function getAlternateTest()
    {
        return $this->alternateTest;
    }

    /**
     * @param mixed $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param mixed $nameOfAlternateCodingSystem
     */
    public function setNameOfAlternateCodingSystem($nameOfAlternateCodingSystem)
    {
        $this->nameOfAlternateCodingSystem = $nameOfAlternateCodingSystem;
    }

    /**
     * @return mixed
     */
    public function getNameOfAlternateCodingSystem()
    {
        return $this->nameOfAlternateCodingSystem;
    }

    /**
     * @param mixed $nameOfCodingSystem
     */
    public function setNameOfCodingSystem($nameOfCodingSystem)
    {
        $this->nameOfCodingSystem = $nameOfCodingSystem;
    }

    /**
     * @return mixed
     */
    public function getNameOfCodingSystem()
    {
        return $this->nameOfCodingSystem;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


}


?>