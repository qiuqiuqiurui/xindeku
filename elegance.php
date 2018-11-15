<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/11
 * Time: 16:51
 */
function countgracepoint($n)
{
    $count = 0;
    for ($y = 1; $y * $y < $n*$n; $y++) {

        $x = (int)sqrt($n*$n - $y * $y);
        if ($y * $y + $x * $x == $n*$n) {

            $count++;

        }

    }
    $count *= 4;
     $y = (int)sqrt($n*$n);
    if ($y * $y == $n*$n) $count += 4;
    return $count;


}

echo countgracepoint(8);
?>