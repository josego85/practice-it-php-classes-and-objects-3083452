<?php

include '_includes.php';

$admin = new Member();
$admin->username = 'Admin';

$member = new Member();
$member->username = 'Member';

$workspace = $admin->createWorkspace("domain");
$admin->addWorkspaceMember($member, $workspace);

$chat = $member->createChat("Test1", $workspace);
$member->postMessageToChat("Hello", $chat);

echonl("URL: " . $workspace->getUrl());
echonl($workspace->members);
echonl($chat->messages);

// $member2 = new Member();
// $member2->username = 'Member2';

// $member2->createChat("Test2", $workspace);