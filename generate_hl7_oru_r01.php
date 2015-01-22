<?php

include("Net/HL7/Message.php");
include("Net/HL7/Types/Types.php");
include("Net/HL7/Messages/ORU_R01.php");

# parse an ORU_R01 message

$test_message="MSH|^~\\&|^2.16.840.1.114222.4.1.3701^ISO|^2.16.840.1.114222.4.1.3699^ISO|^2.16.840.1.114222.4.3.2.3^ISO|^2.16.840.1.114222^ISO|200612011339||ADT^A04^ADT_A01|2.16.840.1.114222.4.1.3699200612011339090372|P|2.5|||||||||Biosense-V1.04^^2.16.840.1.114222.4^ISO\rEVN|A04|200612011339\rPID|||617459^^^&2.16.840.1.114222.4.3.3.1.9.1&ISO||||196507|M||2106-3^White^2.16.840.1.113883.6.238^1^^Local-VT232|^^^OH^43026^^^^OH049|25||||||726245^^^&2.16.840.1.114222.4.3.3.1.9.1&ISO\rPV1||O^Outpatient^2.16.840.1.113883.12.4^O^^Local-VT234|^^^M|C^Elective^2.16.840.1.113883.12.7^3^^Local-VT203||||||SUR^Surgery^2.16.840.1.113883.12.265^SUR^^Local-VT217||||1^Physician referral^2.16.840.1.113883.12.23^1^^Local-VT219||||||||||||||||||||||||||||||200612011339\rPV2|||^HERNIA^Local\rOBX|1|NM|29553-5^Calculated Patient Age^2.16.840.1.113883.6.1||41|a^Years^2.16.840.1.113883.6.8|||||F";

$msg = new Net_HL7_Message($test_message);
echo (new Net_HL7_Types_XON($msg->getSegmentByName("MSH")->getField(3)))->getUniversalId();
echo "<br/>\n";
echo (new Net_HL7_Types_TS($msg->getSegmentByName("MSH")->getField(4)))->toTsString();
echo "<br/>\n";
echo (new Net_HL7_Types_CX($msg->getSegmentByName("PID")->getField(3)))->getIdNumber();
echo "<br/>\n";

# create an ORU_R01 message
$sample_message = Net_HL7_Messages_ORU_R01::generate();

$pidfield = Net_HL7_Types_CX::template();
$pidfield->setIdNumber("1234");
$sample_message->getSegmentByName("PID")->setField(3, $pidfield->toArray());
echo (new Net_HL7_Types_CX($sample_message->getSegmentByName("PID")->getField(3)))->getIdNumber();
echo "<br/>\n";








?>
