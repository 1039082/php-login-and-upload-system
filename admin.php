<head><title>add item</title></head>
<?php

    include('haeder.php');
    ?>
<button><a href="index.php">chrismas list </a></button>
<?php
if( (!isset($_SESSION['user']) OR empty($_SESSION['user'])) AND $_SERVER['REQUEST_URI'] != '/login.php') {
    header("Location: login.php");
    include("config.php");
}

?>

<form method="post" action="script-additem.php" enctype="multipart/form-data">
    <h1>Add an Item</h1>

    <label for="name">name</label>
    <input id="name" name="name" type="text">

    <label for="description">description</label>
    <textarea id="description" name="description"></textarea>

    <label for="link">link</label>
    <input id="link" name="link" type="text">

    <label for="price">price</label>
    <input id="price" name="price" type="text">

    <label for="image">image</label>
    <input type="file" name="image" id="file">

    <input type="submit" class="submit" value="add item">


    </form>


