<?php
    require_once'../model/dbcon.php';
?>
<html style="">
    <head>
        <link rel="stylesheet" href="/stylesheets/style.css?v=<?php echo time();?>">
    </head>
    <body>
        
            <div class="Profile">
                <div class="Profile-Informations">
                    <?php
                    session_start();
                    ?>
                    <h4><?php echo $_SESSION['userid']; ?></h4>
                    <h2><?php echo $_SESSION['username']; ?><br></h2>
                    <h4><?php echo $_SESSION['email']; ?></h4>
                </div>
            </div>
       
    </body>
</html>