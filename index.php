<?php
    $submitted = false;
    include_once('logic.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picnic Trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Picnic Trip</h1>
        <p>These details are required to register yourself for the Trip</p>
        <br>

        <?php
            if ($submitted) {
                echo '<p id="submitP">Thanks for Submitting the form. We Received your details.</p>';
            }
        ?>

        <div class="form">
            <h2>Enter Your Details:</h2>
            <form action="./index.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Aditya Panwar">
                <br>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="25">
                <br>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="male" value="M">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="F">
                <label for="female">Female</label>
                <br>
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone" placeholder="1234567890">
                <br>
                <label for="others">Message</label>
                <textarea name="others" id="others" placeholder="Enter Other Information"></textarea>
                <br>
                <button class="btn" type="submit">Submit</button>
                <button class="btn" type="reset">Reset</button>
            </form>
        </div>
    </div>
    <script src="./index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `phone`, `others`, `dt`) VALUES (NULL, 'he', '5', 'F', '9571195711', 'hello', current_timestamp()) -->
</body>
</html>
