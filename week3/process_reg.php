<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $course = $_POST["course"];
    $errors = array();
    $dirF = "pro_img/".$_FILES["profile_image"]["name"];

    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $dirF);   
     
        echo "Registration successful!<br>";
        echo "Full Name: $full_name<br>";
        echo "Email: $email<br>";
        echo "Date of Birth: $dob<br>";
        echo "Course: $course<br>";
        echo "Profile Image: <img src='$dirF' alt='Profile Image'>";
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }

?>