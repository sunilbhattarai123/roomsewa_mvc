<?php
date_default_timezone_set('Asia/Kathmandu');
 include("./config/config.php");
if (isset($_POST["verify_email"])) {
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // mark email as verified
    $sql = "UPDATE tenant SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "' AND otp_created_at > NOW() - INTERVAL 2 MINUTE";
    $result = mysqli_query($db, $sql);

    if (!$result) {
       $error= "Verification code failed.";

        
    }else{

        header("Location:tenant-login.php");
    
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    /* Light gray background */
}

.container {
    margin-top: 50px;
    max-width: 400px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header-box {
    background-color: #5cb85c;
    /* Primary blue background */
    color: #fff;
    /* White text color */
    padding: 15px;
    border-radius: 8px 8px 0 0;
    text-align: center;
}

h2 {
    margin: 0;
    font-size: 28px;
    /* Larger font size */
}

.verification-box {
    background-color: #fff;
    /* White background */
    padding: 20px;
    border-radius: 0 0 8px 8px;
}

label {
    color: #5cb85c;
    /* Primary blue text color */
}

input::placeholder {
    color: #a8a8a8;
    /* Placeholder text color */
}

.verify {
    background-color:#5cb85c;
    /* Primary blue background */
    color: #fff;
    /* White text color */
    border: 1px solid #5cb85c;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;

    /* transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out; */
}

.verify:hover {
    background-color: #4cae4c;
    transform: scale(1.15);
    /* Darker green on hover */
}
</style>
<body>


    <div class="container">
        <div class="header-box mb-4">
            <h2>Verify Your Email</h2>
        </div>

        <div class="verification-box">
            <p>Enter Code Within 2 minutes</p>
            <form method="post">
                <div class="form-group">
                    <input type="hidden" name="email"
                        value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>
                    <label for="verificationCode">Enter the Verification Code:</label>
                    <input type="text" class="form-control" id="verificationCode" name="verification_code"
                        placeholder="Verification Code" required>
                </div>
                    <div style="color:red; padding:10px;"><?php echo $error ?? '' ?></div>
                <div class="form-group text-center">
                    <button class="verify" type="submit" class="btn btn-block" name="verify_email">Verify</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>