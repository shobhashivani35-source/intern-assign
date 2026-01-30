<!DOCTYPE html>
<html>

<head>
    <title>Marks</title>
</head>

<body>

    <h2>Enter Marks</h2>

    <form method="post">
        <input type="text" name="m1"><br><br>
        <input type="text" name="m2"><br><br>
        <input type="text" name="m3"><br><br>
        <input type="text" name="m4"><br><br>
        <input type="text" name="m5"><br><br>

        <input type="submit" name="submit" value="Result">
    </form>

    <?php
if(isset($_POST['submit']))
{
    $total = $_POST['m1']+$_POST['m2']+$_POST['m3']+$_POST['m4']+$_POST['m5'];
    $per = $total/5;

    echo "Total Marks = ".$total."<br>";
    echo "Percentage = ".$per;
}
?>

</body>

</html>