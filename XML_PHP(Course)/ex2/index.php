<?php
$xmlText = file_get_contents("messages.xml");
$xml = new SimpleXMLElement($xmlText);
$messages = $xml->children(); 
//Will remove the last message

unset($messages[2]);

//Will add new message tag with all it's children

$new_Message = $xml->addChild("message");
$new_Message->addAttribute("msjID","2");
$new_Message->addChild("username","Paul");
$new_Message->addChild("msjtitle","Message_Continuation1");
$new_Message->addChild("msjcontent","This is great,I'm glad to hear that!");
$new_Message->addChild("datetime","5/19/2021 12:17");

//Will add another new message tag with all it's children

$new_Message = $xml->addChild("message");
$new_Message->addAttribute("msjID","3");
$new_Message->addChild("username","Angela");
$new_Message->addChild("msjtitle","Message_Continuation2");
$new_Message->addChild("msjcontent","Thanks for your concern Paul!");
$new_Message->addChild("datetime","5/19/2021 12:19");

//Will save the content in a new .xml file
$xml->asXML("newmessages.xml");
//This will print the content to the screen
header("Content-Type: text/xml");
echo $xml->asXML();