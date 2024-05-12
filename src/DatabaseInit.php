<?php
namespace Cheng\EasyOrmDatabase;
use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseInit
{
    public function __construct($host, $dbName, $dbUser, $dbPw, $dbChareset, $collation = 'utf8_unicode_ci', $prefix = '', $connectionName = 'default')
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $host,
            'database' => $dbName,
            'username' => $dbUser,
            'password' => $dbPw,
            'charset' => $dbChareset,
            'collation' => $collation,
            'prefix' => $prefix,
        ], $connectionName);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}