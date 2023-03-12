<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$json = file_get_contents('../Models/User.json');
$data = json_decode($json, true);

$new_user = array(
    'name' => $name,
    'email' => $email,
    'username' => $username,
    'password' => $password,
);

$data[] = $new_user;
$json = json_encode($data);
file_put_contents('../Models/User.json', $json);


if (isset($_FILES['pfp'])) {
    $file_name = $username;
    $file_tmp = $_FILES['pfp']['tmp_name'];
    $file_size = $_FILES['pfp']['size'];
    $file_type = $_FILES['pfp']['type'];

    $upload_dir = '../img/';
    $target_file = $upload_dir . basename($file_name) . '.jpg';

    if (move_uploaded_file($file_tmp, $target_file)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'File upload failed.';
    }
}

header('Location: ../Views/Login.php');