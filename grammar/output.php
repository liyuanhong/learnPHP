<?php
/**
 * Created by PhpStorm.
 * User: liyuanhong
 * Date: 2018/12/10
 * Time: 4:33 PM
 */


//学习PHP的 echo , print, printf, print_f, var_dump  输出函数
//最佳实践 （服务调试）
//不使用print, 可用echo 替代
//由于echo只能输出简单的字符串，需要了解变量详细信息不用echo, 建议使用print_r(), var_dump() (个人更偏爱var_dump)
//调试信息输出到浏览器， 尝试添加 echo '<pre>'; 产生更友好的信息显示
/*
 * echo用于输出一个或者多个字符串, 不换行
 *如果输出对象非字符串，会尝试将对象转成字符串, 转化失败则抛出异常
 *echo属于语法结构，而非函数
 */
class People{
    public $name = "lili";
    public $age = "27";
    private $liked = "girls";

    function test(){ echo "hello world !" ;}
}
$arr = array("aaa","bbb","ccc");
$arr1 = ["name"=>"honghong","age"=>26,"hello","array"=>[1,2,3,4,5]];
$str = "hello world";
$peo = new People();

echo "\n-------------------------------echo-----------------------------------\n";
echo $arr;
echo "\n";
echo $arr1;
echo "\n";
echo $str;
//echo "\n";
//echo $peo;  会报错：Object of class People could not be converted to string


/*
 * print 属于语法结构，而非函数 (同echo)
 *print 一次只能接受一个字符串(区分与echo)
 *其他效果同echo
 */
echo "\n--------------------------------print----------------------------------\n";
print $arr;
echo "\n";
print $arr1;
echo "\n";
print $str;
//echo "\n";
//print $peo;  会报错：Object of class People could not be converted to string

/*
 * 用于 打印关于变量的易于理解的信息。(不包括变量类型信息)
 *对于对象, 打印所有属性(public, protected, private)
 *一次仅允许打印一个变量(区别于echo)
 */
echo "\n-------------------------------print_r-----------------------------------\n";
print_r($arr);
echo "\n";
print_r($arr1);
echo "\n";
print_r($str);
echo "\n";
print_r($peo);

/*
 * 一个或多个表达式的结构信息 (print_r只打印一个表达式）
 *输出包括 类型 与值(print_r() 不显示类型)
 */

echo "\n-------------------------------print_r-----------------------------------\n";
var_dump($arr);
echo "\n";
var_dump($arr1);
echo "\n";
var_dump($str);
echo "\n";
var_dump($peo);

/*
 * printf(): 用于格式化输出的场景
 *sprintf() 用于格式化字符串场景, 较printf()区别在于，前者直接输出到标准输出， 后者字符串以变量形式返回
 */

echo "\n-------------------------------printf-----------------------------------\n";
printf($arr);
echo "\n";
printf($arr1);
echo "\n";
printf($str);
//echo "\n";
//printf($peo);  会报错：Object of class People could not be converted to string
echo "\n-------------------------------sprintf-----------------------------------\n";
sprintf($arr);
echo "\n";
sprintf($arr1);
echo "\n";
sprintf($str);
//echo "\n";
//sprintf($peo);  会报错：Object of class People could not be converted to string