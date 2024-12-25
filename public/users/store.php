<h1>Storing user.....</h1>

<?php require '../layout/header.php'; ?>
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
if ($data['mobile']===''){
    $errors['mobile_err']='Mobile is required';
}elseif(!preg_match('/^01[0-2,5]{1}[0-9]{8}$/', $data['mobile'])){
    $errors['mobile_err'] = 'Mobile number is not valid!';
}


// Password validation
if ($data['password'] === '' ) {
    $errors['password_err'] = 'Password is required!';
} elseif (strlen($data['password']) < 8) {
    $errors['password_err'] = 'Password must be at least 8 characters long!';
} elseif (!preg_match('/[A-Z]/', $data['password'])) {
    $errors['password_err'] = 'Password must contain at least one uppercase letter!';
} elseif (!preg_match('/[a-z]/', $data['password'])) {
    $errors['password_err'] = 'Password must contain at least one lowercase letter!';
} elseif (!preg_match('/[0-9]/', $data['password'])) {
    $errors['password_err'] = 'Password must contain at least one number!';
} elseif (!preg_match('/[\W_]/', $data['password'])) {
    $errors['password_err'] = 'Password must contain at least one special character!';
}
if ($data['password_confirmation'] === '') {
    $errors['password_confirmation_err'] = 'Password confirmation is required!';
}
elseif($data['password'] !== $data['password_confirmation']) {
    $errors['password_confirmation_err'] = 'Passwords do not match!';
}

// dd($errors , true);
if (count($errors) > 0) {
    // We have erros
    // Save the old data into session
    $_SESSION['old'] = $old;
    // Save the errors data into session
    $_SESSION['errors'] = $errors;
    // redirect back to the create form
    header('location: create.php');
} 
else {
    // We do not have erros

    // Save the user to Database

    $name = $data['first_name'] . ' ' . $data['last_name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $roles = 'guest';

    $timestamp = date('Y-m-d h:i:s');


    $qry = "INSERT INTO `pst_users` 
        (`name`, `email`, `mobile`, `password`, `roles`, `created_at`, `updated_at`) 
        VALUES ('$name','$email','$mobile','$password','$roles','$timestamp','$timestamp')";

    if ($db->query($qry)) {

        // Get the id of newly created user
        $id = $db->insert_id;

        $_SESSION['success'] = 'User Created Successfully';

        header("location: /user.php?id=$id");

    } else {

        // Save not success
        $_SESSION['save_error'] = 'Cannot add new user!!!';

        header('location: create-user.php');
    }
}
?>
<?php require '../layout/footer.php'?>;