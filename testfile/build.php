<?php
$exts = ['php'];
$dir = __DIR__;
$file  = 'test.phar';
$phar = new Phar(__DIR__ . '/' . $file, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,$file);
//开始打包
$phar->startBuffering();

foreach($exts as $ext){
    $phar->buildFromDirectory($dir,'/\.' . $ext .'$/');
}

$phar->delete('build.php');
$phar->setStub($phar->createDefaultStub('test.php'));
$phar->stopBuffering();
//打包完成
echo 'finished';


?>