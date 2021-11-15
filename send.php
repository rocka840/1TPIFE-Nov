<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <?php
    if (isset($_POST["firstname"], $_POST["lastName"], $_POST["email"])) {
        $fileHandle = fopen("data.csv", "");
        fwrite($fileHandle, $_POST["firstName"] . "," . $_POST["lastName"] . "," . $_POST["email"] . "," . uniqid());
        fclose($fileHandle);
    } else {
    ?>

        <form method="post">
            <input type="text" name="firstName" placeholder="First Name"> <br>
            <input type="text" name="lastName" placeholder="Last Name"> <br>
            <input type="text" name="email" placeholder="Email"> <br>
            <input type="submit" name="submit" value="Submit">
        </form>

    <?php
    }
    ?>
</body>

</html>