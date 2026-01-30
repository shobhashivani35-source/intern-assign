<!DOCTYPE html>
<html>

<head>
    <title>Swapping Numbers</title>
</head>

<body>

    <?php
$a = 10;
$b = 20;

echo "Before Swapping<br>";
echo "a = $a<br>";
echo "b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "<br>After Swapping<br>";
echo "a = $a<br>";
echo "b = $b";
?>

</body>

</html>