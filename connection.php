<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'login-register');

    if (!$conn) {
        die("Failed to connect" . mysqli_connect_error());
    }