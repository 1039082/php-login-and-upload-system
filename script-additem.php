<?php
include("config.php");
$name= $description = $price =  $link = $image = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $link = $_POST['link'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);

    $name = test_input($name);
    $description = test_input($description);
    $price = test_input($price);
    $link = test_input($link);
    $image = test_input($image);

    $name = mysqli_real_escape_string($conn, $name);
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $link = mysqli_real_escape_string($conn, $link);
    $image = mysqli_real_escape_string($conn, $image);



    $insert = "INSERT INTO item (name, description, price, link, image, image_naam) VALUES ('$name', '$description', '$price', '$link', '{$image}','{$image_name}')";

    $result = mysqli_query($conn, $insert);

    if(!$result){
        die("het is fout gegaan " . mysqli_error($conn));
    }
    else{
        echo "success!";
        header("Location: index.php");
    }
}




$conn->close();
?>