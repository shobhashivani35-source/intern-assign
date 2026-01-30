<!DOCTYPE html>
<html>

<head>
    <title>Number Program</title>
</head>

<body>

    <h2>Enter Number</h2>

    <form method="post">
        <input type="text" name="num">
        <br><br>

        <input type="submit" name="cube" value="Cube">
        <input type="submit" name="table" value="Table">
        <input type="submit" name="fact" value="Factorial">
        <input type="submit" name="prime" value="Prime Check">
    </form>

    <?php
if(isset($_POST['cube']))
{
    $n = $_POST['num'];
    echo "Cube = ".($n*$n*$n);
}

if(isset($_POST['table']))
{
    $n = $_POST['num'];
    for($i=1;$i<=10;$i++)
    {
        echo "<br>".$n." x ".$i." = ".($n*$i);
    }
}

if(isset($_POST['fact']))
{
    $n = $_POST['num'];
    $f = 1;
    for($i=1;$i<=$n;$i++)
    {
        $f = $f * $i;
    }
    echo "Factorial = ".$f;
}

if(isset($_POST['prime']))
{
    $n = $_POST['num'];
    $count = 0;

    for($i=1;$i<=$n;$i++)
    {
        if($n % $i == 0)
        {
            $count++;
        }
    }

    if($count == 2)
        echo "Prime Number";
    else
        echo "Not Prime Number";
}
?>

</body>

</html>