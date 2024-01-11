<?php
include_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $userid = $_GET["userid"]; // Get the user ID from the URL
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $secondname = $_POST["secondname"];
    $City = $_POST["City"];

    // Handle image upload
    $targetDir = "uploads/"; // Change this to your desired directory
    $Image = $_FILES["Image"]["name"];
    $targetFilePath = $targetDir . basename($userImage);
    move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFilePath);

    $sql = "UPDATE user_details SET firstname='$firstname', lastname='$lastname', secondname='$secondname', City='$City', Image='$Image' WHERE userid=$userid";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
