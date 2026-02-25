<?php
session_start();
include '../config/db.php';

// Check admin login
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

$message = "";

// Fetch diseases for dropdown
$disease_query = mysqli_query($conn, "SELECT * FROM diseases");

if (isset($_POST['add'])) {

    $doctor_name = mysqli_real_escape_string($conn, $_POST['doctor_name']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $disease_id = $_POST['disease_id'];

    // Insert doctor
    $insert = mysqli_query($conn,
        "INSERT INTO doctors (doctor_name, specialization, mobile_no, disease_id)
         VALUES ('$doctor_name', '$specialization', '$mobile', '$disease_id')"
    );

    if ($insert) {
        $message = "Doctor added successfully!";
    } else {
        $message = "Insert Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor - Smart Health</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Add New Doctor</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php if ($message != "") { ?>
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            <?php } ?>

            <div class="card p-4 shadow">

                <form method="POST">

                    <div class="mb-3">
                        <label>Doctor Name</label>
                        <input type="text" name="doctor_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Specialization</label>
                        <input type="text" name="specialization" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Select Disease</label>
                        <select name="disease_id" class="form-control" required>
                            <option value="">Select Disease</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($disease_query)) {
                                echo "<option value='".$row['disease_id']."'>".$row['disease_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" name="add" class="btn btn-success w-100">
                        Add Doctor
                    </button>

                    <a href="view_doctors.php" class="btn btn-secondary w-100 mt-2">
                        View Doctors
                    </a>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>
