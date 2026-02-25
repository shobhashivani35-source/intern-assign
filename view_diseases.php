<?php
session_start();
include '../config/db.php';

$message = "";

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check admin credentials
    $query = mysqli_query($conn,
        "SELECT * FROM admin WHERE email='$email' AND password='$password'"
    );

    if (!$query) {
        die("Query Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($query) == 1) {

        $admin = mysqli_fetch_assoc($query);

        $_SESSION['admin_id'] = $admin['admin_id'];
        $_SESSION['admin_name'] = $admin['name'];

        header("Location: dashboard.php");
        exit;

    } else {
        $message = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Smart Health</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Admin Login</h2>

    <div class="row justify-content-center">
        <div class="col-md-5">

            <?php if ($message != "") { ?>
                <div class="alert alert-danger">
                    <?php echo $message; ?>
                </div>
            <?php } ?>

            <div class="card p-4 shadow">

                <form method="POST">

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" name="login" class="btn btn-primary w-100">
                        Login
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

</body>
</html>
