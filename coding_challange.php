<?php
// Define valid login credentials
$valid_username = 'Donald';
$valid_password = 'password';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get input values from form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Check if input values match valid credentials
    // === is known as the identical operator
	if ($username === $valid_username && $password === $valid_password) {
		// Login successful
		$message = 'Login successful!';
		$success = true;
	} else {
		// Login failed
		$message = 'Invalid username or password';
		$success = false;
	}
} else {
	// Form not submitted yet
	$message = '';
	$success = null;
}

// If login failed, keep asking for login details until login is successful
while (!$success) {
	include('login_form.php');
    echo $message.'<br>';
	exit();
}

// If login was successful, display success message with ternary operator
echo $message.'<br>';
echo $success ? 'Welcome, '.$valid_username.'!' : '';
?>
