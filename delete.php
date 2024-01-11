<?php
include_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["userid"])) {
    $userid = $_GET["userid"];

    $sql = "DELETE FROM user_details WHERE userid = $userid";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
