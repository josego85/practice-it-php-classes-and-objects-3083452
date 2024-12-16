<?php

include '_includes.php';

$chat = new Chat();
$member = new Member();
$message = new Message();
$workspace = new Workspace();

$flag = false;
echonl($chat, $flag);
echonl($member, $flag);
echonl($message, $flag);
echonl($workspace, $flag);

echonl(get_declared_classes());