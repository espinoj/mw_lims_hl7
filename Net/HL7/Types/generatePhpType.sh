#!/bin/bash

./generatePhpType.pl ED sourceApplication,typeOfData,dataSubtype,encoding,data >ED.php
./generatePhpType.pl EI	entityIdentifier,namespaceID,universalId,universalIdType > EI.php
./generatePhpType.pl EIP placerAssignedIdentifier,fillerAssignedIdentifier > EIP.php
./generatePhpType.pl FN	surname,ownSurnamePrefix,ownSurname,surnamePrefixFromPartnerSpouse,surnameFromPartnerSpouse > FN.php
./generatePhpType.pl CE identifier,text,nameOfCodingSystem,alternateIdentifier,alternateTest,nameOfAlternateCodingSystem > CE.php
./generatePhpType.pl CQ quantity,units > CQ.php
./generatePhpType.pl CWE identifier,text,nameOfCodingSystem,alternateIdentifier,alternateText,nameOfAlternateCodingSystem,codingSystemVersionId,alternateCodingSystemVersionId,originalText >CWE.php
./generatePhpType.pl CX idNumber,checkDigit,checkDigitScheme,assigningAuthority,identifierTypeCode,assigningFacility,effectiveDate > CX.php
./generatePhpType.pl XON namespaceId,universalId,universalIdType > XON.php




