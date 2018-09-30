<?php
/**
 * ClassLoader Component Of YeahPHP
 * @author wuquanyao <git@yeahphp.com>
 * @link   http://www.yeahphp.com
 */

require __DIR__ . "/ClassLoader.php";

/**
 * 实例化一个类加载器
 */
$classLoader = new \Yeah\Loader\ClassLoader();

/**
 * 从文件中批量添加类的映射,有助于快速查找类文件
 */
$classLoader->addClassMapFromFile(__DIR__ . "/classmap.php");

/**
 * 注册类的加载处理器,实现类的自动加载
 */
$classLoader->register();

/**
 * 返回加载器实例
 */
return $classLoader;