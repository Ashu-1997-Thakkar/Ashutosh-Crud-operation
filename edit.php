<?php
include 'config.php';

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch user data from the database based on the user ID
    $result = mysqli_query($conn, "SELECT * FROM user_details WHERE userid = $userid");
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "User not found";
        exit();
    }

    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $secondname = $row['secondname'];
    $City = $row['City'];
    $Image = $row['Image'];
} else {
    echo "User ID not provided";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Edit User</h2>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="userid" value="<?php echo $userid; ?>">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" required>
        </div>
        <div class="form-group">
            <label for="secondname">Second Name:</label>
            <input type="text" class="form-control" id="secondname" name="secondname" value="<?php echo $secondname; ?>">
        </div>
        <div class="form-group">
            <label for="City">City:</label>
            <select class="form-control" id="City" name="City">
                <option value="Ahmedabad" <?php echo ($Ahmedabad == 'Ahmedabad') ? 'selected' : ''; ?>>Ahmedabad</option>
                <option value="Mumbai" <?php echo ($Mumbai == 'Mumbai') ? 'selected' : ''; ?>>Mumbai</option>
                <!-- Add more cities as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="Image">Image:</label>
            <img src="<?php echo $mage; ?>" alt="Image" style="max-width: 100px; max-height: 100px;">
            <input type="file" class="form-control-file" id="Image" name="Image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
