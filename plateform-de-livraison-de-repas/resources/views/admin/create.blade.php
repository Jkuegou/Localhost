<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Form</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <?php
    include 'config.php'
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query(query: $sql) === TRUE) {
            echo "User Added Successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>

    <form  method="POST">
        <input type="text" name="name" id="" placeholder="Enter your Name" required>
        <input type="email" name="email" id="" placeholder="Enter your Email" required>
        <button type="submit">Add user</button>
    </form>
</body>

</html>