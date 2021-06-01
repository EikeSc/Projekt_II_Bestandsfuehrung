<?php include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <table class="table">
            <h1>
                Login
            </h1>
            <form method="post">
                <div>
                    <table style="width:50%">
                        <tr>
                            <td> ID: </td>
                            <td><input class="textbox" name="WerksleiterID" type="text" placeholder="ID" required></td>
                        </tr>
                        <tr>
                            <td><button onclick="window.location.href='./disponent.php'">Login</button>
                            <td>
                        </tr>
                </div>
            </form>
            <span></span>
            <form>
</body>

</html>