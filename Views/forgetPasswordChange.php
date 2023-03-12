<!-- View file: reset-password.php -->

<?php
session_start();

if (!isset($_SESSION['reset_email'])) {
    header('Location: forgetPassword.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>

<body>
    <form action="../Controllers/userController.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h1>Forget Password</h1>
            <table>
                <tr>
                    <td><label>New Password: </label></td>
                    <td><input type="password" name="password" placeholder="New Password"></td>
                </tr>
                <tr>
                    <td><label>Confirm Password: </label></td>
                    <td><input type="password" id="confirm_password" name="confirm_password"
                            placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="login.php">Login</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>