<?php
$xml = file_get_contents('http://feeds.feedburner.com/abajournal/topstories');

$xmlobj = new SimpleXMLElement($xml);

$namespaces = $xmlobj->getDocNamespaces();

foreach($xmlobj->channel->item as $item) {
    $feedburner_namespace = $item->children($namespaces['feedburner']);
    echo $feedburner_namespace->origLink, "\n";
}
?>