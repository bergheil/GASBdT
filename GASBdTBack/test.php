<?php

function getSim($a1, $a2) {
    $a1_diff = array_diff($a1, $a2);
    $a2_diff = array_diff($a2, $a1);
    var_dump(array_merge($a1_diff, $a2_diff));
}

getSim([1,2], [2,3,4]);