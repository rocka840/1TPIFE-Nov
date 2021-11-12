<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <script src="loadCities.js"></script>
</head>

<body>
        <?php

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
            print("<select id='Country'>");
            while ($row = $res->fetch_assoc()) {
        ?>
                <option value="<?= $row["CountryID"]  ?>"><?= $row["CountryName"]; ?> </option>
        <?php
            }
            print("</select>");
            $stmt->close();
        ?>
        <div id="cities"></div>
</body>

</html>