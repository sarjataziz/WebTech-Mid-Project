<?php
    session_start();
    if(isset($_SESSION['flag'])){
        header('location: ../Views/home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: #f1f1f1;
        text-align: center;
    }

    form {
        border: 3px solid #f1f1f1;
        width: 50%;
        margin: auto;
        margin-top: 10%;
        padding: 10px;
    }

    table {
        margin: auto;
        text-align: center;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <form action="../Controllers/loginController.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h1>Login</h1>
            <table>
                <tr>
                    <td><label>Username: </label></td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="forgetPassword.php">Forget Password?</a></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="registration.php">Create New Account?</a></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>