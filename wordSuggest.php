<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "words";

$connection = mysqli_connect($servername, $username, $password, $dbName);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

    if (isset($_GET["StartChars"])) {

        $sqlSelect = $connection->prepare("SELECT * from englishwords where Word like ?");
        $mySearchString = $_GET["StartChars"] . "%";
        $sqlSelect->bind_param("s", $_GET["StartChars"]);
        $selectionWentOK = $sqlSelect->execute();

        if ($selectionWentOK) {
            $result = $sqlSelect->get_result();
            while ($row = $result->fetch_assoc()) {
                print $row["Word"];
?>
                <br>
<?php
            }
        }
    }

?>