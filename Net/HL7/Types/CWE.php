<?php

/**
 * Created by IntelliJ IDEA.
 * User: jue
 * Date: 1/22/15
 * Time: 1:36 PM
 */
class Net_HL7_Types_CWE
{

    private $identifier;
    private $text;
    private $nameOfCodingSystem;
    private $alternateIdentifier;
    private $alternateText;
    private $nameOfAlternateCodingSystem;
    private $codingSystemVersionId;
    private $alternateCodingSystemVersionId;
    private $originalText;

    function __construct($components)
    {
        $this->identifier=$components[0];
        $this->text=$components[1];
        $this->nameOfCodingSystem=$components[2];
        $this->alternateIdentifier=$components[3];
        $this->alternateText=$components[4];
        $this->nameOfAlternateCodingSystem=$components[5];
        $this->codingSystemVersionId=$components[6];
        $this->alternateCodingSystemVersionId=$components[7];
        $this->originalText=$components[8];
        
    }

    /**
     * @param mixed $alternateCodingSystemVersionId
     */
    public function setAlternateCodingSystemVersionId($alternateCodingSystemVersionId)
    {
        $this->alternateCodingSystemVersionId = $alternateCodingSystemVersionId;
    }

    /**
     * @return mixed
     */
    public function getAlternateCodingSystemVersionId()
    {
        return $this->alternateCodingSystemVersionId;
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
     * @param mixed $alternateText
     */
    public function setAlternateText($alternateText)
    {
        $this->alternateText = $alternateText;
    }

    /**
     * @return mixed
     */
    public function getAlternateText()
    {
        return $this->alternateText;
    }

    /**
     * @param mixed $codingSystemVersionId
     */
    public function setCodingSystemVersionId($codingSystemVersionId)
    {
        $this->codingSystemVersionId = $codingSystemVersionId;
    }

    /**
     * @return mixed
     */
    public function getCodingSystemVersionId()
    {
        return $this->codingSystemVersionId;
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
     * @param mixed $originalText
     */
    public function setOriginalText($originalText)
    {
        $this->originalText = $originalText;
    }

    /**
     * @return mixed
     */
    public function getOriginalText()
    {
        return $this->originalText;
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