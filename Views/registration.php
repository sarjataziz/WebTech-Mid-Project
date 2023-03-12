<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: #f2f2f2;
        text-align: center;
    }
    </style>
    <title>Registration</title>
</head>

<body>
    <form action="../Controllers/registrationController.php" method="POST">
        <fieldset>
            <table align="center">
                <tr>
                    <td><label>Name: </label></td>
                    <td><input type="text" id="name" name="name" placeholder="name"></td>
                </tr>
                <tr>
                    <td><label for="Email">Email: </label></td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                <tr>
                    <td><label for="Username">Username: </label></td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><label for="Password">Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>