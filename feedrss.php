<?php
$html = "";

$url = "";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
    $title = $xml->feed->entry[$i]->title;
    $html .= "<P2>$title</P2>";
}
echo $html;

?>






