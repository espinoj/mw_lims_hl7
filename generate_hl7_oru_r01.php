<?php
require_once "./Net/HL7/Segments/MSH.php";
require_once "./Net/HL7/Message.php";

$msg  = new Net_HL7_Message();

$msh = new Net_HL7_Segment("MSH");
$msh->setField(4, "^2.16.840.1.113883.3.XXX.4^ISO");

$msg->addSegment($msh);


$seg1 = new Net_HL7_Segment("PID");

$seg1->setField(3, "XXX");

$msg->addSegment($seg1);

echo $msg->toString();

?>
