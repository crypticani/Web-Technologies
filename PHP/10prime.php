<h2>Check a number if it is Prime or NOT</h2>
<form method="post">
    Enter a Number: <input type="number" name="input"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
function prime($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
if($_POST) {
    $number = $_POST['input'];
    $flag = prime($number);
    if ($flag == 1)
        echo "Prime";
    else
        echo "Not Prime";
    }
?>