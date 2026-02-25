<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Smart Health</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow">
                <h5>Address:</h5>
                <p>123 Health Street, Wellness City, India</p>

                <h5>Email:</h5>
                <p>info@smarthealth.com</p>

                <h5>Phone:</h5>
                <p>+91 9876543210</p>

                <h5>Website:</h5>
                <p>www.smarthealth.com</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
