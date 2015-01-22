#!/bin/bash

./generatePhpType.pl ED sourceApplication,typeOfData,dataSubtype,encoding,data >ED.php
./generatePhpType.pl EI	entityIdentifier,namespaceID,universalId,universalIdType > EI.php
./generatePhpType.pl EIP placerAssignedIdentifier,fillerAssignedIdentifier > EIP.php
./generatePhpType.pl FN	surname,ownSurnamePrefix,ownSurname,surnamePrefixFromPartnerSpouse,surnameFromPartnerSpouse > FN.php

