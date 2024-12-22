<h1>Storing user.....</h1>
<?php 
include '../../load.php';
dd($_POST);
// Save the post data into a variable named old for later use
$old = $_POST;
// Save a copy of the post data to validate
$data = $_POST;
// Create an empty array named erros, to store any found errors
$errors = [];
// first_name validation
if ($data['first_name'] === '') {
    $errors['first_name_err'] = 'First name is required!';
} elseif (strlen($data['first_name']) < 3) {
    $errors['first_name_err'] = 'First name should be more than 3 letters!';
} elseif (strlen($data['first_name']) > 15) {
    $errors['first_name_err'] = 'First name should be less than or equals 15 letters!';
}
// last_name validation
if ($data['last_name'] === '') {
    $errors['last_name_err'] = 'Last name is required!';
} elseif (strlen($data['last_name']) < 3) {
    $errors['last_name_err'] = 'Last name should be more than 3 letters!';
} elseif (strlen($data['last_name']) > 15) {
    $errors['last_name_err'] = 'Last name should be less than or equals 15 letters!';
}
// email validation
if ($data['email'] === '') {
    $errors['email_err'] = 'Email is required!';
} elseif (filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false) {
    $errors['email_err'] = 'Email is not in accepted format!';
}
// mobile validation
// password validation
// dd($errors , true);
if (count($errors) > 0) {
    // We have erros
    // Save the old data into session
    $_SESSION['old'] = $old;
    // Save the errors data into session
    $_SESSION['errors'] = $errors;
    // redirect back to the create form
    header('location: create.php');
} else {
    // We do not have erros
    // Save the user to Database
    // redirect to users page
}
