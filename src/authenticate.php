<?php
    session_start();
    // Connection information
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'recyclebulungi';

    // Set up database connection using the information above
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if(mysqli_connect_errno()){
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Check if the data from the login form was submitted. Use isset to check if the data exists
    if( !isset($_POST['username'], $_POST['password'])){
        // Unable to get data that should've been sent
        exit('Please fill both fields');
    }

    // Preparing SQL statement to prevent SQL injection.
    if($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')){
        // Binding parameters 
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();

        //storing the result to check if account exists in the database
        $stmt->store_result();

        // checking if user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();

            if (password_verify($_POST['password'], $password)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: index.php');
            } else {
                // Incorrect password
                echo 'Incorrect username and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }

        $stmt->close();
    }
    $con->close();
?>