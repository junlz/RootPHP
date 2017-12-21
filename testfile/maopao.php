<?php
/** 每天一到算法提-冒泡排序
 * @author junlz
 * @date 2017-12-21
 * 冒泡排序就好比小学生放学站队，身高小的站在最前面，一次性对两个进行比较。
 */

$queue = [1,34,12,4,3,16,54,23,22,8,10,2,55,33,22];
function maopao($queue)
{
    $len = count($queue);
    //循环冒泡的次数
    for ($i = 1; $i < $len; $i++) {
        // 循环比较的次数
        for ($k = 0; $k < $len - $i; $k++) {
            //交换数据
            if ($queue[$k] > $queue[$k + 1]) {
                $tmp = $queue[$k + 1];
                $queue[$k + 1] = $queue[$k];
                $queue[$k] = $tmp;
            }

        }
    }
return $queue;
}
print_r(maopao($queue));
?>

