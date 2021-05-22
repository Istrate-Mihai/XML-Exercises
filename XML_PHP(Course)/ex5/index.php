<?php

$xml_Document = new DOMDocument();

$xml_Document->load("newmessages.xml");

$root = $xml_Document->getElementsByTagName("conversation")->item(0);

$newMessage = $xml_Document->createElement("message");

$username = $xml_Document->createElement("username","Paul");
$msjtitle = $xml_Document->createElement("msjtitle","Message_Continuation3");
$msjcontent = $xml_Document->createElement("msjcontent","Goodbye,Angela");
$datetime = $xml_Document->createElement("datetime","5/19/2021 12:20");

$msjID = $xml_Document->createAttribute("msjID");
$msjID_value = $xml_Document->createTextNode("4");
$msjID->appendChild($msjID_value);

$newMessage->appendChild($msjID);

$newMessage->appendChild($username);
$newMessage->appendChild($msjtitle);
$newMessage->appendChild($msjcontent);
$newMessage->appendChild($datetime);

$root->appendChild($newMessage);

echo $xml_Document->save("newmessagesDOM.xml");