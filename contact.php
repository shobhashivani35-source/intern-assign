<?php
session_start();
include("../config/db.php");

// Check admin login
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Delete Symptom
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM symptoms WHERE symptom_id='$id'");
    header("Location: view_symptom.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM symptoms ORDER BY symptom_id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Symptoms</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
    <h2 class="center">All Symptoms</h2>

    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;background:white;">
        <tr>
            <th>ID</th>
            <th>Symptom Name</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['symptom_id']; ?></td>
            <td><?php echo $row['symptom_name']; ?></td>
            <td>
                <a href="edit_symptom.php?id=<?php echo $row['symptom_id']; ?>" class="btn blue">Edit</a>
                <a href="view_symptom.php?delete=<?php echo $row['symptom_id']; ?>" 
                   class="btn yellow"
                   onclick="return confirm('Are you sure?')">
                   Delete
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>

    <br>
    <div class="center">
        <a href="add_symptom.php" class="btn green">Add New</a>
        <a href="dashboard.php" class="btn light">Back</a>
    </div>

</div>

</body>
</html>
