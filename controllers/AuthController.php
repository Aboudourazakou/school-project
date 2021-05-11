<?php

class Auth
{
    protected static $isloggedIn = false;

    public static function authenticated()
    {

        return self::$isloggedIn;
    }
}
