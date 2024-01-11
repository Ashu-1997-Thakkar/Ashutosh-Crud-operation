<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>User List</h2>
        <?php
        include_once "connection.php";

        // Fetch user details
        $sql = "SELECT * FROM user_details";
        $result = $conn->query($sql);

        // Check if the query was successful
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        ?>

        <?php if ($result->num_rows > 0) : ?>
            <table class="table">
                <!-- Table headers -->
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Second Name</th>
                        <th>City</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?= $row["userid"]; ?></td>
                            <td><?= $row["firstname"]; ?></td>
                            <td><?= $row["lastname"]; ?></td>
                            <td><?= $row["secondname"]; ?></td>
                            <td><?= $row["City"]; ?></td>
                            <td><img src="<?= $row["Image"] ?>" alt="Image" height="50"></td>
                            <td>
                                <a href="edit.php?userid=<?= $row["userid"]; ?>" class="btn btn-outline-primary">Edit</a>
                                <a href="delete.php?userid=<?= $row["userid"]; ?>" class="btn btn-outline-info" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-outline-primary">Add User</a>
        <?php else : ?>
            <p>No users found</p>
        <?php endif; ?>
    </div>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
