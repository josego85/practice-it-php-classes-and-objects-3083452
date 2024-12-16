<?php

enum Role: string {
    case admin = 'admin';
    case member = 'member';
}

class Member {
    public string $username;
    public Role $role;

    public function addWorkspaceMember(Workspace $worspace, Member $member){}
    public function createChat(Chat $chat){}
    public function createWorkspace(Workspace $worspace){}
    public function postMessageToChat(Message $message, Chat $chat){}
}