<h3>Check the string is Palindrome or not.</h3>
<form method="post">
    Enter a String: <input type="text" name="input"><br><br>
    <input type="submit" value="Submit">
</form>
<?php
function Palindrome($string){
    if (strrev($string) == $string){
        return 1;
    }
    else{
        return 0;
    }
}
if($_POST) {
    $original = $_POST['input'];
    if (Palindrome($original)) {
        echo "Palindrome";
    } else {
        echo "Not a Palindrome";
    }
}
?>