<?php

include '_includes.php';

$admin = new Member();
$admin->username = 'admin';
$admin->role = 'admin';

$member = new Member();
$member->username = 'member';

$workspace = $admin->createWorkspace("domain.com");
$admin->addWorkspaceMember($member, $workspace);

$chat = $member->createChat("Test1", $workspace);
$member->postMessageToChat("Hello", $chat);

echonl("URL: " . $workspace->getUrl());
echonl($workspace->members);
echonl($chat->messages);