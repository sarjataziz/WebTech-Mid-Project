<?php
    session_start();
    $username = $_SESSION['username'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        $json_data = file_get_contents('../Models/User.json');
        $data = json_decode($json_data, true);

            $user_id = null;
            foreach ($data as $id => $user) {
                if ($user['username'] === $_SESSION['username']) {
                    $user_id = $id;
                    break;
                }
            }

            if ($user_id !== null) {
                $user = $data[$user_id];
                if ($user['password'] === $current_password) {

                    $data[$user_id]['password'] = $new_password;
                    file_put_contents('../Models/User.json', json_encode($data));

                    header('Location: ../Views/dashBoard.php');
                    exit;
                } else {
                    $error = 'Invalid current password.';
                }
            } else {
                die('User not found.');
            }
    }

?>