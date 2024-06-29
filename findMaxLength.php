<?php
function findMaxLength( $list) {

    $maxElement = -999;
    $oldCounter = 0;
    $newCounter = 1;

    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] > $maxElement) {
            $newCounter++;
            $maxElement = $list[$i];
        } else {
            $maxElement = $list[$i];
            if ($oldCounter < $newCounter) {
                $oldCounter = $newCounter;

            } $newCounter = 1;
        }
    }

    return ($oldCounter > $newCounter) ? $oldCounter : $newCounter;
}

print(findMaxLength([1,1,1,1,2,3,4,5,6]));