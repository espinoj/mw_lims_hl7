<?php

/**
 * Class Net_HL7_Types_XON
 *

 */
class Net_HL7_Types_XON
{

    private $namespace_id, $universal_id, $universal_id_type;


    public function __construct($paramArray)
    {
        $this->namespace_id = $paramArray[0];
        $this->universal_id = $paramArray[1];
        $this->universal_id_type = $paramArray[2];

    }


    /**
     * @return array
     **/
    function toArray()
    {
        return array(
            $this->namespace_id,
            $this->universal_id,
            $this->universal_id_type
        );
    }

    /**
     * @param mixed $namespace_id
     */
    public function setNamespaceId($namespace_id)
    {
        $this->namespace_id = $namespace_id;
    }

    /**
     * @return mixed
     */
    public function getNamespaceId()
    {
        return $this->namespace_id;
    }

    /**
     * @param mixed $universal_id
     */
    public function setUniversalId($universal_id)
    {
        $this->universal_id = $universal_id;
    }

    /**
     * @return mixed
     */
    public function getUniversalId()
    {
        return $this->universal_id;
    }

    /**
     * @param mixed $universal_id_type
     */
    public function setUniversalIdType($universal_id_type)
    {
        $this->universal_id_type = $universal_id_type;
    }

    /**
     * @return mixed
     */
    public function getUniversalIdType()
    {
        return $this->universal_id_type;
    }


}

?>