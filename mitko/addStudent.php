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

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/logo3.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container-advert">
                        <form method="POST" action="functions/add.php" enctype="multipart/form-data" style="top: 65px;">
                            <h3>Add new Student</h3>
                            <input type="text" name="first_name" maxlength="50" placeholder="First name">
                            <input type="text" name="last_name" maxlength="50" placeholder="Last name">
                            <input type="text" name="diplomna" maxlength="50" placeholder="Diplomna Title">
                            <input type="text" name="diplomna_description" maxlength="50" placeholder="Diplomna Description">
                            <select id="params" name="classId" class="select">
                                <option value="1" data-marker="1">12A</option>
                                <option value="2" data-marker="2">12B</option>
                            </select>
                            <button type="submit" name="upload" value="Upload" class="btn">Upload</button>
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