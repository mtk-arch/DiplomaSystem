<?php include "functions/db.php"; 
if ($loggedIn){
    header("Location: diplomni.php");
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

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/logo.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <form id="RegForm" method="POST" action="functions/user.php">
                            <input type="text" name="username" placeholder="Потребителско име">
                            <input type="password" name="password" placeholder="Парола">
                            <button type="submit" name="action" value="login" class="btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script text="text/javascript" src="js/menu_toogle.js"></script>
    <script text="text/javascript" src="js/login.js"></script>
</body>
</html>