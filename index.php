
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div id="login" class="field">
        <fieldset>
            <legend>Login</legend>
            <form action="login_handler.php" method="post">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">

                <label for="password">Password: </label>
                <input type="password" name="password" id="password">

                <input type="submit" value="Login">
                <a href="register.php">
                    <input type="button" value="Register">
                </a>
            </form>
            <?php 
            if(isset($_SESSION["invalid"])){
                echo $_SESSION["invalid"];
            }
            ?>
        </fieldset>
    </div>





    <script src="script.js"></script>
</body>
</html>
