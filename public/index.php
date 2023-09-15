<?php

$body = file_get_contents('php://input');

// body => JSON => Array
$webhook = get_object_vars(json_decode($body));

/*

// This is what WeKan board changes Outgoing Webhook sends to this PHP Incoming Webhook receiver:

s Object
(
    [text] => xet7 moved card "Coffee" at board "ONTOCHAIN HACATHON #2" from list "Product List" at swimlane "SHOP" to list "Buy" at swimlane "SHOP"
https://ontokanban.wekan.team/b/Cq4v4kTqTeKSsYmnL/ontochain-hacathon-2/moo2AFZZgj82FLXJR
    [cardId] => moo2AFZZgj82FLXJR
    [listId] => vqAnfvAZvQCZj7Sjm
    [oldListId] => KFzZ63mQ32TaDtTym
    [boardId] => Cq4v4kTqTeKSsYmnL
    [user] => xet7
    [card] => Coffee
    [swimlaneId] => 7sQxMdykTnujoKWWi
    [description] => act-moveCard
)

// This is how values from board changes can be used:
$webhook['text']
$webhook['cardId']
$webhook['listId']
$webhook['boardId']
$webhook['user']
$webhook['card']
$webhook['swimlaneId']
$webhook['description']
*/

// Showing product name that is from WeKan Outgoig Webhook to PHP Webhook
//file_put_contents('php://stdout', 'Webhook received: ' . print_r($webhook['card'], true) . "\r\n");

// Show all from webhook
file_put_contents('php://stdout', 'Webhook received: ' . print_r($webhook, true) . "\r\n");

// PHP calls WeKan API with Python api.py that is from https://github.com/wekan/wekan
$execoutput=null;
$execretval=null;
//exec('python3 /home/wekan/repos/webhook-php/public/api.py boards SbnWgDFqJhCFN9Yjw', $execoutput, $execretval);
// Showing list of boards from WeKan API
//file_put_contents('php://stdout', 'Webhook received: ' . print_r($execoutput, true) . "\r\n");

// Return 200 OK to WeKan Outgoing Webhook
header("HTTP/1.1 200 OK");
?>
