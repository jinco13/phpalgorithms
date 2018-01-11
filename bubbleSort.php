<?php

function bubbleSort($sort) {
    do {
        $flag = 0;
        $max = count($sort) - 1;
        for ($i = 0; $i < $max; $i++) {
            if ($sort[$i] > $sort[$i + 1]) {
                $flag = 1;
                $j = $sort[$i];
                $sort[$i] = $sort[$i + 1];
                $sort[$i+1] = $j;
            }
        }
    } while ($flag == 1);
    return $sort;
}

$num = [3, 4, 1, 5, 8, 9, 4];

var_dump($num);

print "Bubble Sort";

var_dump(bubbleSort($num));
