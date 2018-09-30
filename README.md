YeahPHP类文件加载器 - ClassLoader
---

> `YeahPHP`类加载器遵守`PSR-4`和`PSR-0`命名空间规范,具体使用请看下面介绍


- 首先加载`ClassLoader`文件

```php
require "yourpath/src/yeahphp/Loader/ClassLoader.php";
```

- 创建一个类加载器对象

```php
$classLoader = new ClassLoader();
```

- 添加一个PSR-4命名空间规范的前缀

```php
$classLoader->addPsr4($prefix, $directory);
```

> 参数解释

|参数名称|说明|
|:---|:---|
|$prefix|命名空间前缀|
|$directory|命名空间前缀对应的路径|


- 添加一个PSR-0命名空间规范的前缀

```php
$classLoader->addPsr0($prefix, $directory);
```

> 参数解释

|参数名称|说明|
|:---|:---|
|$prefix|命名空间前缀|
|$directory|命名空间前缀对应的路径|


- 添加类的映射

```php
$classLoader->addClassMap($class, $file);
```

> 参数解释

|参数名称|说明|
|:---|:---|
|$class|完整的类名称,包含命名空间|
|$file|类文件路径|


- 通过`classmap`文件批量添加类的映射

```php
$classLoader->addClassMapFromFile($file);
```

> 参数解释

|参数名称|说明|
|:---|:---|
|$file|classmap文件路径|

> `classmap` 文件返回结果为一维数组,格式如下

```php
return array(
    "类名称1" => "类文件路径1",
    "类名称2" => "类文件路径2",
    // ... 
);
```

- 注册类自动加载器

```
$classLoader->register($throw, $prepend);
```

|参数名称|说明|
|:---|:---|
|$throw|是否允许抛出异常, 默认为 `true`|
|$prepend|是否将加载器添加到队列之首, 默认为`false`|


- 卸载类自动加载器

```
$classLoader->unregister();
```

> 在项目中,你可以直接加载`autolaod`文件,该文件已经为您初始化了类加载器和一些基础工作

```php
require "yourpath/src/yeahphp/Loader/autoload.php";
```
