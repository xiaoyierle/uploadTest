<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/30/030
 * Time: 17:13
 */
$f=$_FILES["file"];
if(!is_dir("upload")){
    mkdir("upload");
}
$houzhui=explode(".",$f["name"])[1];
$name=time().".".$houzhui;
if(is_uploaded_file($f["tmp_name"])){
    $r=move_uploaded_file($f["tmp_name"],"upload/".$name);

}
