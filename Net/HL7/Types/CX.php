<?php

/**
 * Class Net_HL7_Types_CX
 *
 */
class Net_HL7_Types_CX
{

    var $idNumber;
    var $checkDigit;
    var $checkDigitScheme;
    var $assigningAuthority;
    var $identifierTypeCode;
    var $assigningFacility;
    var $effectiveDate;

    function __construct($components)
    {

        $this->idNumber = $components[0];
        $this->checkDigit = $components[1];
        $this->checkDigitScheme = $components[2];
        $this->assigningAuthority = $components[3];
        $this->identifierTypeCode = $components[4];
        $this->assigningFacility = $components[5];
        $this->effectiveDate = $components[6];
    }

    /**
     * @param string $assigningAuthority
     */
    public function setAssigningAuthority($assigningAuthority)
    {
        $this->assigningAuthority = $assigningAuthority;
    }

    /**
     * @return string
     */
    public function getAssigningAuthority()
    {
        return $this->assigningAuthority;
    }

    /**
     * @param string $assigningFacility
     */
    public function setAssigningFacility($assigningFacility)
    {
        $this->assigningFacility = $assigningFacility;
    }

    /**
     * @return string
     */
    public function getAssigningFacility()
    {
        return $this->assigningFacility;
    }

    /**
     * @param string $checkDigit
     */
    public function setCheckDigit($checkDigit)
    {
        $this->checkDigit = $checkDigit;
    }

    /**
     * @return string
     */
    public function getCheckDigit()
    {
        return $this->checkDigit;
    }

    /**
     * @param string $checkDigitScheme
     */
    public function setCheckDigitScheme($checkDigitScheme)
    {
        $this->checkDigitScheme = $checkDigitScheme;
    }

    /**
     * @return string
     */
    public function getCheckDigitScheme()
    {
        return $this->checkDigitScheme;
    }

    /**
     * @param string $effectiveDate
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @param string $idNumber
     */
    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
    }

    /**
     * @return string
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @param string $identifierTypeCode
     */
    public function setIdentifierTypeCode($identifierTypeCode)
    {
        $this->identifierTypeCode = $identifierTypeCode;
    }

    /**
     * @return string
     */
    public function getIdentifierTypeCode()
    {
        return $this->identifierTypeCode;
    }


} 