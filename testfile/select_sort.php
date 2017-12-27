<?php
/**
 * 选择排序
 */
$arr = [2,34,6,43,0,23,5,10,21,88,54];
function selectSort($arr){
    $length = count($arr);
    //双层循环来搞定第一层确定轮询次数，最多也就N-1次
    for($i=0;$i < $length - 1;$i++){
        //假设$p是当前最小的
        $p = $i;
        for($j=$i+1;$j<$length;$j++){
            if($arr[$p]>$arr[$j]){
                $p = $j;
            }
        }
        if($p != $i){
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }

    }
    return $arr;
}

print_r(selectSort($arr));




?>