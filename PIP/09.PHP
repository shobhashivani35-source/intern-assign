<!DOCTYPE html>
<html>

<head>
    <title>Grade</title>
</head>

<body>

    <h2>Enter Marks</h2>

    <form method="post">
        <input type="text" name="marks">
        <br><br>
        <input type="submit" name="submit" value="Check Grade">
    </form>

    <?php
                if(isset($_POST['submit']))
                {
                    $m = $_POST['marks'];

                        if($m >= 90)
                                echo "Grade A+";
                                    else if($m >= 80)
                                            echo "Grade A";
                                                else if($m >= 70)
                                                        echo "Grade B+";
                                                            else if($m >= 60)
                                                                    echo "Grade B";
                                                                        else if($m >= 50)
                                                                                echo "Grade C";
                                                                                    else
                                                                                            echo "Fail";
                                                                                            }
                                                                                            ?>

</body>

</html>