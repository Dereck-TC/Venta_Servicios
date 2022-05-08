<?php
if ($action = isset($_POST['action'])) {
    include '../helpers/helper.php';
    switch ($action) {
        case 'login':
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $data = array(
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
                );

                $response = callToService('login', 'POST', $data);

                if (isset($response->access_token)) {
                    $_SESSION['user_token'] = $response->token_type . ' ' . $response->access_token;
                    header('Location: index.php');
                }
            } else {
                echo 'Login failed';
            }

            break;
    }
}
