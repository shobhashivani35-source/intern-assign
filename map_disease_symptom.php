<?php
session_start();

// If admin not logged in, redirect to login
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Smart Health</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="navbar">
    <h2>Smart Health - Admin</h2>
    <div>
        <a href="dashboard.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <h1 class="center">Admin Dashboard</h1>

    <div class="card-container">

        <!-- Manage Symptoms -->
        <div class="card">
            <h3>Manage Symptoms</h3>
            <p>Add, View, Edit, Delete Symptoms</p>
            <a href="add_symptom.php" class="btn blue">Add</a>
            <a href="view_symptom.php" class="btn light">View</a>
        </div>

        <!-- Manage Diseases -->
        <div class="card">
            <h3>Manage Diseases</h3>
            <p>Add, View, Edit, Delete Diseases</p>
            <a href="add_disease.php" class="btn green">Add</a>
            <a href="view_disease.php" class="btn light">View</a>
        </div>

        <!-- Manage Doctors -->
        <div class="card">
            <h3>Manage Doctors</h3>
            <p>Add, View, Edit, Delete Doctors</p>
            <a href="add_doctor.php" class="btn yellow">Add</a>
            <a href="view_doctor.php" class="btn light">View</a>
        </div>

        <!-- Disease-Symptom Mapping -->
        <div class="card">
            <h3>Disease-Symptom Mapping</h3>
            <p>Map symptoms with diseases</p>
            <a href="map.php" class="btn teal">Map</a>
            <a href="view_map.php" class="btn light">View Mapping</a>
        </div>

    </div>
</div>

</body>
</html>
