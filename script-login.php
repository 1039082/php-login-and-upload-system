<?php

include("config.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $_POST['username'];
$password = sha1($_POST['password']);

$query = "SELECT ID FROM user WHERE username = '$username' AND password = '$password'";

if ($result = $conn->query($query)) {
while ($user = $result->fetch_object()) {
$_SESSION['user'] = $user->ID;
header("Location: admin.php");
}
}
else {
header("Location: login.php");
}

$conn->close();

?>