<?php
require_once "Net/HL7/Segments/MSH.php";
require_once "Net/HL7/Message.php";
require_once "Net/HL7/Types/XON.php";
require_once "Net/HL7/Types/TS.php";

/**
 * Class Net_HL7_Messages_ORU_R01
 *
 * Construct a blank ORU_R01 message
 */
class Net_HL7_Messages_ORU_R01
{

    /**
     * @return Net_HL7_Message
     *
     */
    public static function template()
    {
        return new Net_HL7_Message("MSH||||||||ORU^R01^ORU_R01|\rPID||\rPV1||\rORC||\rOBR||\rTQ1||\rOBX||\rSPM||\r");

    }

}


?>

