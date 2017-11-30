<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 15:51
 */
/*$r=basename("http://localhost/PHP/0830/file/test.txt");
//echo $r;
$r=dirname("http://localhost/PHP/0830/file/test.txt");
echo $r;
$r=file_exists('test.txt');
var_dump($r);
$r=is_dir("aa");
var_dump($r);*/
//mkdir("aa");
//rmdir("aa");
//unlink("test.txt");
//var_dump(getcwd());
//rename("test.txt","aa/aa.txt");
$f=fopen("aa/aa.txt","r+");//$f是一个句柄 这是一个
//fwrite($f,"hello world");
$r=fread($f,1);
var_dump($r);
fclose($f);
file_put_contents("aa/aa.txt","123456");
$r=file_get_contents("aa/aa.txt");
var_dump($r);
