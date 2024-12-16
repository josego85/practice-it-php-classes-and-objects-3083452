<?php

class Workspace
{
    public string $url;

    /** @var Chat[] */
    public array $chats = [];
    
    /** @var Member[] */
    public array $members = [];

    public static string $urlDomain = '.flack.app';
}