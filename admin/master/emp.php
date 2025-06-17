<?php
include 'connection.php';

$employee_id = $_GET['id'] ?? 0;
$message = "";

if ($employee_id) {
    // Fetch existing record
    $result = mysqli_query($conn, "SELECT * FROM employees WHERE emp_id = $employee_id");
    $emp = mysqli_fetch_assoc($result);
} else {
    die("Invalid employee ID.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_name = $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $emp_mobile = $_POST['emp_mobile'];
    $emp_designation = $_POST['emp_designation'];
    $existing_file = $_POST['existing_file'];

    $upload_dir = "uploads/";
    $file_path = $existing_file;

    if (isset($_FILES['emp_file']) && $_FILES['emp_file']['size'] > 0) {
        $file_name = basename($_FILES["emp_file"]["name"]);
        $file_tmp = $_FILES["emp_file"]["tmp_name"];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed_types = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
        if (in_array($file_type, $allowed_types)) {
            $new_file_name = uniqid() . "_" . $file_name;
            $file_path = $upload_dir . $new_file_name;

            if (!move_uploaded_file($file_tmp, $file_path)) {
                $message = "Failed to upload new file.";
                $file_path = $existing_file;
            }
        } else {
            $message = "Invalid file type.";
            $file_path = $existing_file;
        }
    }

    $query = "UPDATE employees SET emp_name=?, emp_email=?, emp_mobile=?, emp_designation=?, file_path=? WHERE emp_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssi", $emp_name, $emp_email, $emp_mobile, $emp_designation, $file_path, $employee_id);

    if ($stmt->execute()) {
        $message = "Employee updated successfully.";
        // Refresh data
        $result = mysqli_query($conn, "SELECT * FROM employees WHERE emp_id = $employee_id");
        $emp = mysqli_fetch_assoc($result);
    } else {
        $message = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
    function previewFile() {
        const file = document.querySelector('#emp_file').files[0];
        const preview = document.querySelector('#preview');
        const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];

        if (file && allowedTypes.includes(file.type)) {
            const reader = new FileReader();
            reader.onloadend = () => preview.src = reader.result;
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
    </script>
</head>
<body>
<div class="container mt-5">
    <h2>Update Employee</h2>

    <?php if (!empty($message)): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="existing_file" value="<?= $emp['file_path'] ?>">

        <div class="form-group">
            <label>Employee Name *</label>
            <input type="text" name="emp_name" class="form-control" value="<?= $emp['emp_name'] ?>" required>
        </div>

        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="emp_email" class="form-control" value="<?= $emp['emp_email'] ?>" required>
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="emp_mobile" class="form-control" value="<?= $emp['emp_mobile'] ?>">
        </div>

        <div class="form-group">
            <label>Designation</label>
            <input type="text" name="emp_designation" class="form-control" value="<?= $emp['emp_designation'] ?>">
        </div>

        <div class="form-group">
            <label>Replace File (leave empty to keep current file)</label>
            <input type="file" name="emp_file" class="form-control-file" id="emp_file" onchange="previewFile()">
        </div>

        <?php if (in_array(pathinfo($emp['file_path'], PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png'])): ?>
            <div class="form-group">
                <img id="preview" src="<?= $emp['file_path'] ?>" height="100" alt="Image Preview" class="mt-2" />
            </div>
        <?php elseif (!empty($emp['file_path'])): ?>
            <div class="form-group">
                <a href="<?= $emp['file_path'] ?>" target="_blank" class="btn btn-sm btn-secondary">View Existing File</a>
            </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
</div>
</body>
</html>
