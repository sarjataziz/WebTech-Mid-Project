<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $json = file_get_contents('../Models/User.json');
    $data = json_decode($json, true);

    $filtered_users = array_filter($data, function($user) use ($username) {
        return $user['username'] === $username;
    });

    if (empty($filtered_users)) {
        echo 'Wrong username or password';
        die();
    }

    foreach ($filtered_users as $user) {
        if ($username == $user["username"] && $password == $user["password"] ) {
            $_SESSION['username'] = $user["username"];
            setcookie('username', $user["username"], time() + 60 * 60 * 24 * 7);
            header('Location: ../Views/dashBoard.php');
        } else {
            echo 'Wrong username or password';
        }
    }
    if (isset($_GET['action']) && $_GET['action'] == 'forgotPassword') {
        $username = "test";
        $users = json_decode(file_get_contents('users.json'), true);
        foreach ($users as $user => $value) {
            if (($value->username) === $username) {
                header('Location:forgetPassword.php');
            }
        }
        header('Location:ChangePassword.php');
    }

?>