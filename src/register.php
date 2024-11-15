<?php
// Page for registering new users of the website
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

// Check if the data from the registration form was submitted
if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password'])) {
    exit('Please fill all fields');
}

// Check if the password and confirm-password fields match
if ($_POST['password'] !== $_POST['confirm-password']) {
    exit('Passwords do not match');
}

// Hash the password
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Prepare SQL statement to prevent SQL injection
if ($stmt = $con->prepare('INSERT INTO users (fname, lname, phone, email, username, password) VALUES (?, ?, ?, ?, ?, ?)')) {
    $stmt->bind_param('ssssss', $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email'], $_POST['username'], $hashed_password);
    $stmt->execute();

    // Store username and userid in session
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = $stmt->insert_id;

    // Redirect to index.php with success message
    header('Location: index.php?success=1');
} else {
    echo 'Could not prepare statement!';
}
$stmt->close();
$con->close();
?>