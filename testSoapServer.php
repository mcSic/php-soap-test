<?php

require(__DIR__.'/wsdlClasses/NotifReportRQType.class.php');
require(__DIR__.'/wsdlClasses/NotifReportRSType.class.php');
require(__DIR__.'/wsdlClasses/NotifDetails.class.php');
require(__DIR__.'/wsdlClasses/HotelNotifReport.class.php');
require(__DIR__.'/wsdlClasses/HotelDescriptiveContents.class.php');
require(__DIR__.'/wsdlClasses/HotelDescriptiveContent.class.php');
require(__DIR__.'/wsdlClasses/SuccessType.class.php');
require(__DIR__.'/wsdlClasses/ErrorsType.class.php');
require(__DIR__.'/wsdlClasses/ErrorType.class.php');
require(__DIR__.'/wsdlClasses/WarningsType.class.php');
require(__DIR__.'/wsdlClasses/WarningType.class.php');
require(__DIR__.'/wsdlClasses/FromRefType.class.php');
require(__DIR__.'/wsdlClasses/HmsServiceType.class.php');
require(__DIR__.'/wsdlClasses/MessageHeaderType.class.php');
require(__DIR__.'/wsdlClasses/TimeStampType.class.php');
require(__DIR__.'/wsdlClasses/UniqueIDType.class.php');


$requestStr = <<<XML
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://gcnet/Intranet/cgi-bin/1AXML.xsd">
<soap:Header xmlns="http://www.amadeus.net/1axml-msg/schema/msg-header-1_0.xsd"></soap:Header>
<soap:Body>
<OTA_NotifReportRQ xmlns="http://www.opentravel.org/OTA/2003/05" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.opentravel.org/OTA/2003/05 OTA_NotifReportRQ.xsd" Version="4.000" TransactionIdentifier="CT52638_7050">
<Success/>
<Warnings>
<Warning Language="en" Type="1" Code="394">GuaranteePayment discarded. GuaranteeType or Type must exist.</Warning>
<Warning Language="en" Type="1" Code="394">Penalty description must contain a name</Warning>
<Warning Language="en" Type="3" Code="367">Invalid e-mail address format prevents us from processing the corresponding data element, which will therefore be ignored.</Warning>
<Warning Language="en" Type="1" Code="394">Unsupported code (AUT - 7) prevents us from processing the corresponding data element, which will therefore be ignored.</Warning>
</Warnings>
<UniqueID Type="10" ID="CT"/>
<NotifDetails>
<HotelNotifReport>
<HotelDescriptiveContents>
<HotelDescriptiveContent HotelCode="52638_7050" HotelCodeContext="1A"/>
</HotelDescriptiveContents>
</HotelNotifReport>
</NotifDetails>
</OTA_NotifReportRQ>
</soap:Body>
</soap:Envelope>
XML;

function OTA_NotifReportRQ($success, $warnings, $uniqueId, $notifReport)
{
  //  print_r($success);
  return 'test';
}

$soapServer = new SoapServer(
  null,
  ['uri' => 'http://csp.mk',
    'classmap' => [
    'NotifReportRQType' => 'NotifReportRQType',
    'NotifReportRSType'=> 'NotifReportRSType',
    'NotifDetails'=> 'NotifDetails',
    'HotelNotifReport'=> 'HotelNotifReport',
    'HotelDescriptiveContents'=> 'HotelDescriptiveContents',
    'HotelDescriptiveContent'=> 'HotelDescriptiveContent',
    'SuccessType'=> 'SuccessType',
    'ErrorsType'=> 'ErrorsType',
    'ErrorType'=> 'ErrorType',
    'WarningsType'=> 'WarningsType',
    'WarningType'=> 'WarningType',
    'FromRefType'=> 'FromRefType',
    'ServiceType'=> 'HmsServiceType',
    'MessageHeaderType'=> 'MessageHeaderType',
    'TimeStampType'=> 'TimeStampType',
    'UniqueIDType'=> 'UniqueIDType',
  ]]);

$soapServer->addFunction('OTA_NotifReportRQ');

$soapServer->handle($requestStr);

/*

// $header = new SoapHeader('http://www.amadeus.net/1axml-msg/schema/msg-header-1_0.xsd', 'MessageHeader', null, false);
// $soapServer->addSoapHeader($header);

<MessageHeader ResponseRequested="true" Terminate="true" Reverse="true" id="000100N7LFJWSR" version="1.0" soap:mustUnderstand="1">
<From>1AHOSTDC</From>
<To>1ASRHOSCT4</To>
<TimeStamp>
<GenerationTime>2016-08-17T10:42:35Z</GenerationTime>
</TimeStamp>
<FromRef>
<ID>00N7LFJWSR</ID>
<SequenceNb>1</SequenceNb>
</FromRef>
<Service version="" id="1A2013A_Async">
<name>OTA_NotifReportRQ</name>
</Service>
</MessageHeader>

*/