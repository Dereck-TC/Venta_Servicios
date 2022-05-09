<?php

if ($action = isset($_GET['action'])) {
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
                    echo json_encode(array('status' => 'success'));
                } else {
                    echo json_encode(array('status' => 'error'));
                }
            } else {
                echo json_encode(array('status' => 'error'));
            }

            break;
    }
}
