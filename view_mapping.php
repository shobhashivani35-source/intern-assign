<?php
session_start();
include("../config/db.php");

// Check admin login
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Delete Disease
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM diseases WHERE disease_id='$id'");
    header("Location: view_disease.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM diseases ORDER BY disease_id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Diseases</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
    <h2 class="center">All Diseases</h2>

    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;background:white;width:80%;">
        <tr>
            <th>ID</th>
            <th>Disease Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['disease_id']; ?></td>
            <td><?php echo $row['disease_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="edit_disease.php?id=<?php echo $row['disease_id']; ?>" class="btn blue">Edit</a>
                <a href="view_disease.php?delete=<?php echo $row['disease_id']; ?>"
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
        <a href="add_disease.php" class="btn green">Add New</a>
        <a href="dashboard.php" class="btn light">Back</a>
    </div>

</div>

</body>
</html>
