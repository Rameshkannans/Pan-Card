<?php
include '../server.php';
session_start();
$login_error_message = ''; 
if (isset($_POST['admin_log_submit'])) {
    $admin_log_uname = $_POST['admin_log_uname'];
    $admin_log_pass = $_POST['admin_log_pass'];
    $querys = new Database();
    $admin_reg_id = $querys->select_admin_reg_id($admin_log_uname, $admin_log_pass);
    if ($admin_reg_id) {
        $_SESSION['admin_reg_id'] = $admin_reg_id;
        header('Location: index.php');
        exit(); 
    } else {
        $login_error_message = 'Incorrect email or password'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
</head>
<body>
    <div class="login-box bg-dark bg-opacity-25">
        <div class="d-flex justify-content-center mb-2 align-item-center" >
            <img src="male.png" class="a rounded-5" style="width: 100px; height: 100px;">
        </div>
        <h6 class="text-center text-light mb-5">Admin Login</h6>
        <?php if (!empty($login_error_message)) : ?>
            <div class="alert alert-danger " role="alert">
                <?php echo $login_error_message; ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="user-box">
            <input type="text" name="admin_log_uname" required style="background-color: transparent;">
                <label>Useremail</label>
            </div>
            <div class="user-box">
                <input type="password" name="admin_log_pass" required="">
                <label>Password</label>
            </div>
            <div class="text-center">
                <button type="submit" name="admin_log_submit" class="a btn" style="border: none;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Login
                </button>
            </div>
        </form>
        <hr />
        <div class="text-center">
            <a href="adminregister.php" class="btn btn-outline-dark ">Register</a>
        </div>
    </div>
    
</body>
</html>
