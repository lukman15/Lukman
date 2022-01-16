<?php
    session_start();
    include('connection.php');

    if (isset($_POST['submit'])) {
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT password, firstname, status FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            
            if ($row['status'] == 'U') {
                $_SESSION['firstname'] = $row['firstname'];
                header('location: user_page.php');
            }
            else if ($row['status'] == 'A') {
                $_SESSION['firstname'] = $row['firstname'];
                header('location: index1.php');
            }
        }
        else {
            $_SESSION['err_login'] = "Wrong Email / Password ";
            header('location: index.php');
        }
    }  