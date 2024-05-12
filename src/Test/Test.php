<?php
namespace Cheng\EasyOrmDatabase\Test;
use Cheng\EasyOrmDatabase\DatabaseInit;
use Cheng\EasyOrmDatabase\Model\SampleModel;

require_once __DIR__ . '/../../vendor/autoload.php';

new DatabaseInit('192.168.125.133', 'blog', 'root', 'root', 'utf8');
$res = SampleModel::where('id', ">", 1)->get()->toArray();
var_dump($res);