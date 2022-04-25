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
        <h1>Diplomni</h1>
        <?php
        if(isset($_GET['delete'])){
            $ids = $_GET['id'];
            $db->query("DELETE FROM diplomni WHERE id = '$ids'");
        }
        $query = $db->query("SELECT * FROM diplomni");
        $a = $db->query("SELECT COUNT(0) FROM diplomni");
        $if = $a->fetch_array();
        if ($if[0] > 0){  ?>
        <table>
            <tr>
                <th>Title</th>
                <th>Student First Name</th>
                <th>Student Last Name</th>
            </tr>
            <?php
            while ($row = $query->fetch_assoc()){
                ?>
            <tr>
                <td>
                    <p><?php echo($row['title']);?></p>
                </td>
                <td>
                    <p><?php echo($row['student_first_name']);?></p>
                </td>
                <td>
                    <p><?php echo($row['student_last_name']);?></p>
                </td>
            </tr>
            <?php  } } ?>
        </table>
    </div>

    <script text="text/javascript" src="js/menu_toogle.js"></script>
</body>
</html>
