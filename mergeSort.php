<?php

$count = 10;

$sort = [];

function mergeSort(&$list, $left, $right) {
    $buffer = [];
    if ($left < $right) {
        $center = intval(($left + $right) / 2);
        $p = 0;
        $j = 0;
        $k = $left;

        mergeSort($list, $left, $center);
        mergeSort($list, $center + 1, $right);

        for ($i = $left; $i <= $center; $i++) {
            $buffer[$p++] = $list[$i];
        }

        while ($i <= $right && $j < $p) {
            if ($buffer[$j] <= $list[$i]) {
                $list[$k] = $buffer[$j];
                $k++;
                $j++;
            } else {
                $list[$k] = $list[$i];
                $k++;
                $i++;
            }
        }

        while ($j < $p) {
            $list[$k++] = $buffer[$j++];
        }
    }
}

for ($i = 0; $i < $count; $i++) {
    $sort[$i] = rand(0, 100);
    printf("%d ", $sort[$i]);
}

print "\nStart MergeSort\n";
mergeSort($sort, 0, $count - 1);
print "\nFinished MergeSort\n";

for ($i = 0; $i < $count; $i++) {
    printf("%d ", $sort[$i]);
}
print "\n";
