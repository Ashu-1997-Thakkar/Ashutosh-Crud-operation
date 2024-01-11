<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Create User</h2>
    <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="secondname">Second Name:</label>
            <input type="text" class="form-control" id="secondname" name="secondname">
        </div>
        <div class="form-group">
            <label for="City">City:</label>
            <select class="form-control" id="City" name="City">
                <option value="City1">Ahmedabad</option>
                <option value="City2">Mumbai</option>
                <!-- Add more cities as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="Image">Image:</label>
            <input type="file" class="form-control-file" id="Image" name="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
