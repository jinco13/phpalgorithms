<?php

    $n = 10;

    function quickSort($bottom, $top, &$data) {
        if ($bottom >= $top) {
            return false;
        }

        $div = $data[$bottom];
        for($lower = $bottom, $upper = $top; $lower < $upper;) {
            while($lower <= $upper && $data[$lower] <= $div) {
                $lower++;
            }
            while($lower <= $upper && $data[$upper] > $div) {
                $upper--;
            }
            if($lower < $upper) {
                $temp = $data[$lower];
                $data[$lower] = $data[$upper];
                $data[$upper] = $temp;
            }
        }

        $temp = $data[$bottom];
        $data[$bottom] = $data[$upper];
        $data[$upper] = $temp;

        quickSort($bottom, $upper - 1, $data);
        quickSort($upper + 1, $top, $data);
    }

    $sort = array();
    for($i = 0; $i < $n; $i++) {
        $sort[$i] = rand(1, 100);
        printf("%d ", $sort[$i]);
    }

    print "\nStart quickSort\n";

    quickSort(0, $n - 1, $sort);

    print "\n\nSort finished\n";

    for($i = 0; $i < $n; $i++) {
        printf("%d ", $sort[$i]);
    }

    print "\n\nfinished\n";
