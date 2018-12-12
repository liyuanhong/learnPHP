<?php
/**
 * Created by PhpStorm.
 * User: liyuanhong
 * Date: 2018/12/12
 * Time: 10:44 AM
 */

echo "<h2>PHP常量constc测试</h2>";

echo "这个默认常量是 PHP 程序文件名。若引用文件 (include 或 require)则在引用文件内的该常量为引用文件名，而不是引用它的文件名<br>";
print_r("__FILE__: ".__FILE__);
echo "<br>";
echo "<br>";
echo "这个默认常量是 PHP 程序行数。若引用文件 (include 或 require)则在引用文件内的该常量为引用文件的行，而不是引用它的文件行。<br>";
print_r("__LINE__: ".__LINE__);
echo "<br>";
echo "<br>";
print_r("PHP_OS: ".PHP_OS);
echo "<br>";
echo "<br>";
print_r("PHP_VERSION: ".PHP_VERSION);
echo "<br>";