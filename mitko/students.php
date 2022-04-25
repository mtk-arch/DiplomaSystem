<?php include "functions/db.php"; 
if (!$loggedIn){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sale=1.0">
    <link rel="icon" href="images/tsbh4.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');</style>
</head>
<body>
    <?php include "layout/header.php"; ?></div></div>

    <div class="small-container cart-page">
    <h1>Students</h1>
    <a href="addStudent.php" class="btn">Add new Student</a>
        <?php
        if(isset($_GET['delete'])){
            $ids = $_GET['id'];
            $db->query("DELETE FROM students WHERE id = '$ids'");
        }
        $query = $db->query("SELECT * FROM students");
        $a = $db->query("SELECT COUNT(0) FROM students");
        $if = $a->fetch_array();
        if ($if[0] > 0){  ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Class</th>
                <th>Diplomna</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($row = $query->fetch_assoc()){
                ?>
            <tr>
                <td>
                    <p><?php echo($row['first_name']);?></p>
                </td>
                <td>
                    <p><?php echo($row['last_name']);?></p>
                </td>
                <td>
                    <?php if($row['classId'] == 1){
                            echo "12A";
                        }
                        elseif($row['classId'] == 2){
                            echo "12B";
                        }
                    ?>
                </td>
                <td>
                    <p><?php echo($row['diplomna']);?></p>
                </td>
                <td><a href="product.php/?id=<?php echo($row['id']);?>" class="btn">View</a></td>
                <td><a href="?&delete=&id=<?php echo($row['id']);?>" class="btn">Delete</a></td>
            </tr>
            <?php  } } ?>
        </table>
    </div>

    <script text="text/javascript" src="js/menu_toogle.js"></script>
</body>
</html>
