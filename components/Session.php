<?php


class Session
{
    public function __construct()
    {
        return session_start();
    }

}

$session = new Session();