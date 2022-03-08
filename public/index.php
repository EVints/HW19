<?php
echo "Hello!!";

echo "<br>";
echo "<br>";

// 1st Task

function countTo($n)
{

    return $n <= 1 ? print_r(1 . "<br>") : print_r(countTo(--$n) + $n . "<br>");
}

countTo(6);


echo "<br>";
echo "<br>";




//2nd Task

function summ($n)
{

    return $n <= 1 ? 1 : $n + summ($n - 1);
}


print_r(summ(5));



echo "<br>";
echo "<br>";



//3rd Task

function countFromTo($a, $b)
{
    if ($a <= $b) {
        echo $a++ . '<br>';
        if ($a > $b) return;
        countFromTo($a, $b);
    }

    if ($a > $b) {
        echo $a-- . '<br>';
        countFromTo($a, $b);
    }
}


countFromTo(30, 15);



echo "<br>";
echo "<br>";





//4th Task



function fib($n)
{
    if ($n <= 1) {
        return 0;
    } else if ($n == 2) {
        return 1;
    } else {
        return fib($n - 1) + fib($n - 2);
    }
}


function outFib($num)
{
    for ($n = 1; $n > 0; $n++) {
        if (fib($n) >= $num) return;
        echo fib($n) . '<br>';
    }
}


outFib(200);
