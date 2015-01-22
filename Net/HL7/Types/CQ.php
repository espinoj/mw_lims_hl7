<?php


class Net_HL7_Types_CQ
{

    private $quantity;
    private $units;

    function __construct($params)
    {
        $this->quantity = $params[0];
        $this->units = $params[1];
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

    /**
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }


}