<?php

$arr = array(30,1,10,11,3,5,8,4,9,20,50,18);
/**
 * function:QuickSort
 * author:宏岩
 * note:快速排序
 * stpe:
 * 1.拿到一个数组后，通常选择该数组中第一个或最后一个值作为基准元素
 * 2.扫描整个数组，以基准元素作为比较对象把数组分为两个分区。规则是：小的移动到基准元素前面，
 * 大的移到后面，相等的前后都可以。分区完成之后，基准元素就处于数列的中间位置。
 * 3.然后再用同样的办法，递归地排序划分的两个部分。
 */
function quickSort($arr){

    $len = count($arr);

    //quickSort会把数组进行不断地分区，直到分区里边的值只有一个时才停止。
    if($len <= 1) {
        return $arr;
    }

    //声明左分区和右分区。
    $first = $arr[0];
    $left = $right = array();

    //小于基准元素的值放在左分区，大于基准元素的值放在右分区。
    for($i= 1;$i< $len;$i++){
        if($arr[$i] < $first){
            $left[] = $arr[$i];
        }
        if($arr[$i] > $first){
            $right[] = $arr[$i];
        }
    }

    //递归
    $left = quickSort($left);
    $right = quickSort($right);

    //合并基准元素和左右数组。
    return array_merge($left,array($first),$right);

}

quickSort($arr);
?>