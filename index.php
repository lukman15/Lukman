<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <form action="index_db.php" method="post" style="width: 30%; margin: 0 auto;" class="text-center mt-5">
        <h2>Log in</h2><br>
        <?php if (isset($_SESSION['err_login'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['err_login']; ?>
            </div>
        <?php endif; ?>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example1" class="form-control" required/>
                <label class="form-label" for="form1Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control" required/>
                <label class="form-label" for="form1Example2">Password</label>
            </div>
            <p>Not yet a member? <a href="register.php">Register</p>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
</body>

</html>

<?php
    if (isset($_SESSION['err_login']) ) {
        unset($_SESSION['err_login']);
    }
?>