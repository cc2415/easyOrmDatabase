# easyOrmDatabase
## 引用 
>composer require cheng-util/easy-orm-database


### 创建文件
```php

use Cheng\EasyOrmDatabase\Model\BaseModel;

class BannerModel extends BaseModel
{

    protected static $table = 'banner_lm';
}
```
### 使用
```php
//设置数据库链接信息
new DatabaseInit('127.0.0.1', 'blog', 'root', 'root', 'utf8');
$res = BannerModel::where('id', '>', 2)->get()->toArray();
var_dump($res);
```
