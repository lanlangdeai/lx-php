<?php

class Register
{
    protected static $objects;

    function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    function get($alias)
    {
        return self::$objects[$alias];
    }

    function __unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}
