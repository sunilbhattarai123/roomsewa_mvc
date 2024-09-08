<?php 

// include("admin-engine.php");

 ?>

    <link rel="stylesheet" href="/public/css/login.css" class="css">
    <style>
       
    .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
        }
        </style>


<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Admin Login</h3><hr><br><br>
  <form method="POST" action="/login_admin">


    <div class="form-group">
    <span style="color:red;"><?php echo $error ?? '' ?></span>
      <label for="email">Email:</label>
      <input type="text" value="<?php echo $email ?? '' ?>" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>



    <div class="form-group">
                <label for="pwd">Password:</label>
                <div class="password-container"> <!-- Added container -->
                <input type="password" value="<?php echo $password ?? '' ?>" class="form-control" id="pwd" placeholder="Enter password" name="password"
                        >
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('pwd')"></i>
                    <!-- Eye icon -->
                </div>
                <br>
    <center><input type="submit" id="submit" name="admin_login" class="btn btn-primary btn-block" value="Login"></center>
  </form>
</div>

<!-- JavaScript to toggle password visibility -->
<script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pwd");
            var icon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>

<br><br>

