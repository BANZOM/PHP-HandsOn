<?php
    if (isset($_POST['name'])) {
        include('config.php');
        
        $conn = mysqli_connect($server, $user, $password, $db);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // variables to store the form data
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $others = $_POST['others'];

        $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `phone`, `others`, `dt`) VALUE ('$name', '$age', '$gender', '$phone', '$others', current_timestamp());";

        if ($conn->query($sql) == TRUE) {
            // echo "New record created successfully";
            $submitted = true; // flag to show the message
        } else {
            header("Location: error.php");
            exit;
        }

        $conn->close();
    }
?>