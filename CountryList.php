<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <select>
        <?php

        if (isset($_GET["Country"])) {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "firstajax";

            $conn = new mysqli($servername, $username, $password, $db);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("SELECT * from countries");

            $stmt->execute();
            $res = $stmt->get_result();
            print("<select>");
            while ($row = $res->fetch_assoc()) {
        ?>
                <option value="<?= $row["CountryID"]  ?>"><?= $row["CountryName"] . "<br>"; ?> </option>
        <?php
            }
            print("</select>");
            $stmt->close();
        }
        ?>
    </select>
</body>

</html>