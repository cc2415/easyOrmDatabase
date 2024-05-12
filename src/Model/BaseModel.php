<?php

namespace Cheng\EasyOrmDatabase\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
abstract class BaseModel
{
    protected static $table = null;
    protected static $connection = 'default';

    public static function __callStatic($method, $arguments)
    {
        $elo = new class extends Model {

        };
        $elo->setConnection(static::$connection);
        $elo->setTable(static::$table);
        return $elo->$method(...$arguments);

    }
}