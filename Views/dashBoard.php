<?php
session_start();
if (!isset($_SESSION['username'])) {
      header("Location: login.php");
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <table align="center">
        <tr>
            <td> <img src="image/login.png" alt="logo" width="100px" height="100px"></td>
            <td>
                <h2>Baiki Shoe</h2>
            </td>
        </tr>
    </table>
    <br><br>
    <h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>
    <a href="dashBoard.php">Dashboard</a><br>
    <a href="viewProfile.php">View Profile</a><br>
    <a href="editProfile.php">Edit Profile</a><br>
    <a href="form.php">Change Profile Picture</a><br>
    <a href="changePassword.php">Change Password</a><br>
    <a href="../Controllers/logoutController.php">Logout</a><br>
    <a href="userDetails.php">User Details</a><br>


</body>

</html>
