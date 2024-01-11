<?php
include_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_GET["userid"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $secondname = $_POST["secondname"];
    $City = $_POST["City"];

    // Image handling
    $Image = $row["Image"];  // Retrieve the existing image path
    if ($_FILES["Image"]["name"] != "") {
        // If a new image is uploaded, replace the existing one
        $image_path = "uploads\C:\Users\KrupaInfo1\Pictures\Screenshots\current.png" . $_FILES["Image"]["name"];
        move_uploaded_file($_FILES["Image"]["tmp_name"], $Image);
    }

    $sql = "UPDATE user_details SET firstname='$firstname', lastname='$lastname', secondname='$secondname', City='$City', Image ='$Image' WHERE userid=$userid";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
