<?php 
include "functions/db.php"; 
$id = $_GET['id'];
$query = "SELECT * FROM students WHERE id = $id";
$a = $db->query($query);
$if = $a->fetch_array();
while ($row = $a->fetch_assoc()) {
    echo $row['classtype']."<br>";
    header("Location: product.php/?id=$row");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <title>The Sparrow Boutique House</title>
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo"><a href="../index.php"><img src="../images/logo1.png" width="55px"></a></div>
            <?php
            if ($loggedIn) { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="../students.php">Students</a></li>
                        <li><a href="../diplomni.php">Diploma Projects</a></li>
                        <li><a href="../functions/logout.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } 
            else { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="../login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } ?>
        </div>
        </div>
        </div>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <h1><?php echo($if['first_name']);?> <?php echo($if['last_name']);?></h1>
                <h3>
                <?php 
                if($row['params'] == 0){
                    echo "12A";
                    } else{
                        echo "12B";
                    }?>
                </h3>
                <h4>Diploma title: <?php echo($if['diplomna']);?></h4>
                <h3>Descripton</h3>
                <p><?php echo($if['diplomna_description']);?></p>
            </div>
        </div>
    </div>
    
    <script text="text/javascript" src="../js/menu_toogle.js"></script>
</body>
</html>