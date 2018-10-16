<?php
/**
 * Created by PhpStorm.
 * User: Boqian
 * Date: 2018/10/15
 * Time: 21:38
 */
echo "<h1>Hello World<br></h1>";
define("Welcome","Hello,World!\n<br>");
echo Welcome;
echo "传值方式：<br>";
$a="PHP is the best language!";
$b=$a;
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
$a="PHP is not the best language!";
echo "Tips:传值方式改变一个值，另一个值不受影响。<br>";
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
echo "引用方式：<br>";
$a="I love you!";
$b=&$a;
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
echo "我要是改变一下a的值呢？<br>";
$a="emmm.You are a good man.But don't fix me enough.";
echo "a = ".$a."<br>";
echo "b = ".$b."<br />";
?>
