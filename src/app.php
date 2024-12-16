<?php

include '_includes.php';

$admin = new Member('acme_admin');

$memberA = new Member('acme_memberA');
$memberB = new Member('acme_memberB');

$workspace = $admin->createWorkspace('acme');
$admin->addWorkspaceMember($memberA, $workspace);
$admin->addWorkspaceMember($memberB, $workspace);

// creating a chat using the Chat class
// $chat = $memberA->createChat('general', $workspace);

$channel = $admin->createChannel('Channel1', $workspace);
$admin->postMessageToChat('Hello', $channel);
$directMessage = $memberA->createDirectMessage([$memberB], $workspace);
$memberB->postMessageToChat('Hello', $directMessage);

// echonl($channel, true);
// echonl(PHP_EOL);
// echonl($directMessage, true);

echonl($channel->getMessages());
echonl($directMessage->getMessages($memberB));