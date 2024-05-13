

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_reg_log</title>
    <link rel="stylesheet" href="logreg.css">
</head>

<body>
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Login</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-holder">
                    <input type="tel" name="user_log_mobile" class="input" placeholder="Mobile Number" required />
                </div>
                <input type="submit" class="submit-btn" name="user_log_submit" value="Login">
            </form>
            <!-- <?php if (!empty($login_error_message)): ?>
                <div class="alert alert-danger " role="alert">
                 <span style="font-size: 10px; color:white;"><?php echo $login_error_message; ?></span>   
                </div>
            <?php endif; ?> -->
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Register</h2>
                <form action="../forms_datas.php" method="post" enctype="multipart/form-data">
                    <div class="form-holder">
                        <input type="text" name="user_reg_name" class="input" placeholder="Name" required />
                        <input type="email" name="user_reg_email" class="input" placeholder="Email" required />
                        <input type="tel" name="user_reg_mobile" class="input" placeholder="Mobile Number" required />
                    </div>
                    <input type="submit" class="submit-btn" name="user_reg_submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
    </script>
</body>

</html>