<?php

namespace Engine\Helper\Cookie;

class Cookie
{
    /**
     * Add cookies
     * @param string $key
     * @param mixed $value
     * @param integer $time
     */
    public static function set(string $key, mixed $value, int $time = 31536000)
    {
        setcookie($key, $value, time() + $time, '/') ;
    }

    /**
     * Get cookies by key
     * @param $key
     * @return mixed|null
     */
    public static function get(string $key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }

        return null;
    }

    /**
     * Delete cookies by key
     * @param $key
     */
    public static function delete($key)
    {
        if (isset($_COOKIE[$key])) {
            self::set($key, '', -3600);
            unset($_COOKIE[$key]);
        }
    }
}
