<h2>Array Example</h2>

<?php 
$students=array(
    array("fname"=>'Ann', "lname"=>'Smith'),
    array("fname"=>'Tim', "lname"=>'Smith'),
    array("fname"=>'Lisa', "lname"=>'Jones'),
    array("fname"=>'Tom', "lname"=>'Daniels'));
?>

<h3>Print one name from the array</h3>

<?php
    echo 'The first name is '.$students[0]['fname'];
?>

<h3>Print the whole array</h3>

<?php
foreach ($students as $row)
{
    echo $row['fname'].' '.$row['lname'].'<br>';
}
?>

<h3>Names in a table</h3>

<table class="table table-hover table-striped">
    <tr><th>Firstname</th> <th>Lastname</th></tr>
    <?php
        foreach ($students as $row)
        {
            echo '<tr><td>';
            echo $row['fname'];
            echo '</td><td>';
            echo $row['lname'];
            echo '</td></tr>';
        }
    ?>
</table>