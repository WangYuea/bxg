<?php
header('content-type:text/html;charset=utf-8;');
//       echo '123';
//include('views/index.html');
//����url�е������ж��û�������Ǹ�ҳ��
//var_dump($_SERVER['PATH_INFO']);
//include('./views/main/index.html');
//$path=$_SERVER['PATH_INFO'];
//include('./views'.$path.'.html');
//����Ĭ��Ŀ¼
$dir='main';
//����Ĭ���ļ�����
$filename='index';
if(array_key_exists('PATH_INFO',$_SERVER)){
//·������
//����·��
    $path=$_SERVER['PATH_INFO'];
//    ��ȡ�ַ���
    $str=substr($path,1);
//    �ָ��ַ���
    $ret=explode('/',$str);
    if(count($ret)==2){
//    ����·��
//����Ĭ��·��
    $dir=$ret[0];
//    ����Ĭ�ϵ��ļ�
    $filename=$ret[1];
    }else{
    $filename='login';
    }
}
include('./views/'.$dir.'/'.$filename.'.html');
?>