<head><title>chrismaslist</title></head>
<?php
    include('haeder.php');
    ?>

   <button><a href="admin.php"> add item </a></button> <button> <a href="uitloggen.php"> uitloggen </a></button>

<?php
if( (!isset($_SESSION['user']) OR empty($_SESSION['user'])) AND $_SERVER['REQUEST_URI'] != '/login.php') {
    header("Location: login.php");
}
$sql= "SELECT * FROM item";
if ($result = mysqli_query($conn, $sql)){
    while($row = mysqli_fetch_array($result)){
        $iName= $row['name'];
        $iDescription= $row['description'];
        $iPrice= $row['price'];
        $iLink= $row['link'];
        $iImage= $row['image'];
        $iImage_naam= $row['image_naam']

?>

<table>
        <tr class='item'>
            <td class='item_image'>
                <img width="150" src='image/<?php echo $iImage_naam ?>'>
            </td>
            <td class='item_content'>
                <h2 class='item_name'><?php echo $iName ?></h2>
                <div class='item_description'><?php echo nl2br($iDescription) ?></div>
            </td>
            <td class='item_price'>
                <h3>
                        <span class='price'>$<?php echo number_format($iPrice) ?></span>
                </h3>
                <a class='text' href='<?php echo $iLink ?>'>Buy This</a>
            </td>
        </tr>


        </table>


<?php
    }
}
        include('footer.php')
        ?>