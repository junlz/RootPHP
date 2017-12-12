<?php
//require_once "A.php";
//$a = new A();
//print_r($a);
//function __autoload($class)
//{
//    $file = $class . '.php';
//    if(is_file($file)){
//        require_once($file);
//    }
//}
//
//$a = new A();
//
//function loadfile($class)
//{
//    $file = $class . '.php';
//    if(is_file($file)){
//        require_once($file);
//    }
//}
//spl_autoload_register('loadfile');
//$a = new A();
//自动加载器
class Loadclass{

    public  static  function loadfile($class){
        $file = $class . '.php';
        if(is_file($file)){
            require_once($file);
        }
    }
}
spl_autoload_register(array('Loadclass','loadfile'));
$a = new A();
echo '<br />';
$b = new B();
echo '<br />';
$c = new Todo();

?>