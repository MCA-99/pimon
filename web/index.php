<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./img/pimon_icon.png">
        <title>PiMon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <img src="./img/pimon_icon.png" class="pimon_icon" alt="pimon_icon">
                <a class="navbar-brand" href="./index.php">PiMon</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Status</a></li>
                </ul>
            </div>
        </nav>

        <!-- Reload Status page every 5 seconds -->
        <iframe src="./status/index.php" display="block" frameborder="0" height="885vh" width="100%"></iframe>

    </body>
</html>
