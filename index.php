
<?php

/*
 * 阶梯收费
 * 1-5         30
 * 5-20        15
 * 20-50       10
 * 50-200      5
 * 200-1000    3
 * 1000-2000   2
 * 2000-4000   1
 * 4000-6000   0.8
 * 6000-       0.5
 */

function fee ($number,&$fee){
    switch ($number){
        case $number > 6000:
            $fee += ($number-6000)*0.5+fee(6000, $fee);
            break;
        case $number > 4000:
            $fee += ($number-4000)*0.8+fee(4000, $fee);
            break;
        case $number > 2000:
            $fee += ($number-2000)*1+fee(2000, $fee);
            break;
        case $number > 1000:
            $fee += ($number-1000)*2+fee(1000, $fee);
            break;
        case $number > 200:
            $fee += ($number-200)*3+fee(200, $fee);
            break;
        case $number > 50:
            $fee += ($number-50)*5+fee(50, $fee);
            break;
        case $number > 20:
            $fee += ($number-20)*10+fee(20, $fee);
            break;
        case $number > 5:
            $fee += ($number-5)*15+fee(5, $fee);
            break;
        default:
            $fee += $number*30;
            break;
    }
}

fee(6, $fee);
echo $fee;