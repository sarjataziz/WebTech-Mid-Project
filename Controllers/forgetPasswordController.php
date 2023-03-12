<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];

        // Load JSON data from file
        $json_data = file_get_contents('users.json');
        $data = json_decode($json_data, true);

        // Search for user with the specified email address
        $user_id = null;
        foreach ($data as $id => $user) {
            if ($user['email'] === $email) {
                $user_id = $id;
                break;
            }
        }

        // If user found, update session and redirect to password reset page
        if ($user_id !== null) {
            $_SESSION['reset_email'] = $email;
            header('Location: /reset-password');
            exit;
        } else {
            $error = 'Email address not found.';
        }
    }

    // Display forgot password form
    require_once 'views/forgot-password.php';

?>