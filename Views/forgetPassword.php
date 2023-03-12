<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Forgot Password</h1>
    <form action="../Controllers/forgetPasswordController.php" method="POST">
        <fieldset>
            <table align="center">
                <tr>
                    <td><label>Email: </label></td>
                    <td><input type="text" id="email" name="email" placeholder="email" required></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    </form>
</body>

</html>