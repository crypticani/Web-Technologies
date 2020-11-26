<?php
$mysql = new mysqli('localhost', 'myuser', 'password', 'test');

if ($mysql->connect_error) {
    die('Connect Error (' . $mysql->connect_errno . ') '
        . $mysql->connect_error);
}

echo 'Success... ' . $mysql->host_info . "\n";

$query = mysqli_query($mysql,"SELECT * FROM student");
if (mysqli_num_rows($query) > 0){
    ?>
    <br><br>
<table>
    <tr>
        <td>Roll No</td>
        <td>Name</td>
        <td>Marks</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $row["Roll"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Marks"]; ?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</table>
<?php
}
else{
    echo "No result found";
}
$mysql->close();
?>