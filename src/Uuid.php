<?php

namespace JakubRiedl\Uuid;

use Ramsey\Uuid\Uuid as Original;

/**
 * Class Uuid
 * @package JakubRiedl\Uuid
 *
 * @method static Original fromBytes($bytes)
 * @method static Original fromString(string $name)
 * @method static Original fromInteger(int $integer)
 * @method static Original isValid(string $uuid)
 * @method static Original uuid1($node = null,int $clockSeq = null)
 * @method static Original uuid3(string $ns, string $name)
 * @method static Original uuid4()
 * @method static Original uuid5(string $ns, $name)
 */
class Uuid
{
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array("\\Ramsey\\Uuid\\Uuid::$name", $arguments);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array("\\Ramsey\\Uuid\\Uuid::$name", $arguments);
    }
}