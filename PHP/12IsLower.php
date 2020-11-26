<h3>A PHP function that checks if a string is all lower case</h3>
<form method="post">
    Enter the String: <input type="text" name="input"><br><br>
    <input type="submit" value="Submit">
</form>
<?php
if($_POST) {
    $string = $_POST['input'];
    if (ctype_lower($string)) {
        echo "Yes, the string is all lowercase";
    } else {
        echo "No, the string is NOT all lowercase";
    }
}
?>