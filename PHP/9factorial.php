<?php
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo "factorial of 7 is: ";
print_r(factorial(7));
?>