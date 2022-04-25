<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo"><a href="index.php"><img src="images/logo1.png" width="55px"></a></div>
            <?php
            if ($loggedIn) { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="students.php">Students</a></li>
                        <li><a href="diplomni.php">Diploma Projects</a></li>
                        <li><a href="functions/logout.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } 
            else { ?>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php 
            } ?>
        </div>