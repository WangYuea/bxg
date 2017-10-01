<?php
header('content-type:text/html;charset=utf-8;');
//       echo '123';
//include('views/index.html');
//根据url中的特征判断用户想访问那个页面
//var_dump($_SERVER['PATH_INFO']);
//include('./views/main/index.html');
//$path=$_SERVER['PATH_INFO'];
//include('./views'.$path.'.html');
//设置默认目录
$dir='main';
//设置默认文件名称
$filename='index';
if(array_key_exists('PATH_INFO',$_SERVER)){
//路径存在
//请求路劲
    $path=$_SERVER['PATH_INFO'];
//    截取字符串
    $str=substr($path,1);
//    分割字符串
    $ret=explode('/',$str);
    if(count($ret)==2){
//    两层路径
//覆盖默认路劲
    $dir=$ret[0];
//    覆盖默认的文件
    $filename=$ret[1];
    }else{
    $filename='login';
    }
}
include('./views/'.$dir.'/'.$filename.'.html');
?>