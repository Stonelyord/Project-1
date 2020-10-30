<?php
$fname= filter_input(INPUT_POST, 'name');
$lname = filter_input(INPUT_POST,'name');
$birthday = filter_input(INPUT_POST, 'date');
$email= filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST,'password');

if (empty($fname)) {
    $output = "error";
}
if (empty($lname)) {
    $output = "error";
}
if (empty($birthday)) {
    $output = "error";
}
if (empty($email)) {
    $output = "error";
}
if ($password < 8){
    $output= "<br><redtext> Invalid password. Password must be at least 8 characters</redtext>";
}
if (empty($password)) {
    $output2 = "error";
}

?>

<html lang="">
<head><title>QuestionDisplay</title></head>
<body>

<h2>Question Display</h2>
<div>
    $fname: <?php echo  $fname; ?>
</div>
<div>
    lname: <?php echo $lname; ?>
</div>

<div>
    birthday: <?php echo $birthday; ?>
</div>

<div>
    email: <?php echo $email; ?>
</div>

<div>
    password: <?php echo $password; ?>
</div>

</body>
</html>