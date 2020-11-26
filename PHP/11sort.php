<h2>A function to sort an array</h2>
<h4>Unsorted array: 45, 34, 56, 89, 22, 72</h4>
<?php
function array_sort($a)
{
    for($x=0;$x< count($a);++$x)
    {
        $min = $x;
        for($y=$x+1;$y< count($a);++$y)
        {
            if($a[$y] < $a[$min] )
            {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }
    return $a;
}
$a = array(45, 34, 56, 89, 22, 72);
print_r(array_sort($a));
?>