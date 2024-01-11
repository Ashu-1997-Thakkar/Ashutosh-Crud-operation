<?php
include_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $secondname = $_POST["secondname"];
    $City = $_POST["City"];

    // Image processing
    $targetDir = "uploads/"; // Create a directory named 'uploads' to store the uploaded images
    $targetFile = $targetDir . basename($_FILES["Image"]["name"]);
    move_uploaded_file($_FILES["Image"]["tmp_name"], $targetFile);
    $Image = $targetFile;

    // Assuming you have a database connection named $conn
    $sql = "INSERT INTO user_details (firstname, lastname, secondname, City, Image) VALUES ('$firstname', '$lastname', '$secondname', '$City', '$Image')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading file.";
}

$conn->close();
?>