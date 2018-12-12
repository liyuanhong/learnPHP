<?php
/**
 * Created by PhpStorm.
 * User: liyuanhong
 * Date: 2018/12/12
 * Time: 10:18 AM
 */

include("includedPage1.php");
echo "---------------------------------------------------<br>";
require("includedPage2.php");

?>

<div style="width:500px;height:300px;border: solid;border-width: 1px;">
<p>使用include或者require都能将导入的文件包含到当前页面<br>
    区别在于：<br>
    require：这个函数通常放在 PHP 程序的最前面，PHP 程序在执行前，
             就会先读入 require 所指定引入的文件，使它变成 PHP 程序网页的一部份。 <br><br>
    include：这个函数一般是放在流程控制的处理部分中。PHP 程序网页在读到 include 的文件时，
             才将它读进来。这种方式，可以把程序执行时的流程简单化。
</p>

</div>
