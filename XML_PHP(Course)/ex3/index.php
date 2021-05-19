<?php
$xml = simplexml_load_file("newmessages.xml");

$messages = $xml->xpath('/conversation/message');
$titles = $xml->xpath('/conversation/message/msjtitle');
$contents = $xml->xpath('/conversation/message/msjcontent');
$usernames = $xml->xpath('/conversation/message/username');
$dates = $xml->xpath('/conversation/message/datetime');

echo 'These are all the messages<br><br>';

for( $i=0; $i < count($messages) ;$i++ ){

    echo '<h4>Subject: '.$titles[$i].'</h4>';
    echo '<p>From: '.$usernames[$i].'</p>';
    echo '<p>Body:<br><br> '.$contents[$i].'</p>';
    echo '<p>Date: '.$dates[$i].'</p>';

}


