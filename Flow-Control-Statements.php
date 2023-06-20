<?php $user_validated = rand(0, 1);
if ($user_validated==0) : ?>
    <table>
        <tr>
            <td>First Name:</td><td>Sophia</td>
        </tr>
        <tr>
            <td>Last Name:</td><td>Lee</td>
        </tr>
    </table>
<?php else: ?>
    Please log in.
<?php endif ?>

<?php
$total = 0;
$i = 1;
echo "<br>";
while ($i <= 10):
    $total += $i;
    $i++;
endwhile;
echo $total;
?>
<?php
$i = 1;
$total2 = 0;
while ($i <= 11) {
    $total2 += $i;
    $i++;
}

$i = 1;
$total3 = 0;
while ($i <= 12):
    $total3 += $i;
    $i++;
endwhile;
 echo "<br>";
echo $total2;
echo "<br>";
echo $total3;

echo "<br>";
?>
<?php
for ($counter = 0; $counter < 10; $counter++) {
    echo "Counter is $counter <br/>";
}
?>
