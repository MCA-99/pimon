<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./img/pimon_icon.png">
        <title>PiMon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/login_style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/bootstrap.min.js"></script>
    </head>

    <?php
        include('./connection/config.php');

        //$query = mysqli_query($conn, "SELECT * FROM users");
        $query = $conn->prepare("SELECT * FROM users");
        $query->execute();

        foreach($query as $key => $row){
            echo "sql-user: ".$row['username']."";
        }

        echo "user: ".$_POST['username']."<br/>";
        echo "pass: ".$_POST['password']."<br/>";
    ?>

    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="separator">
                    <h2>Login</h2>
                </div>
                <form method='POST' action='index.php'>
                    <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                    <input type="submit" class="fadeIn fourth" value="Send">
                </form>
            </div>
        </div>
    </body>
</html>