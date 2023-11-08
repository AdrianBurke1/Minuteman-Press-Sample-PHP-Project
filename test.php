<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and save the resume
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    $resume_name = $_FILES["resume"]["name"];
    $resume_tmp_name = $_FILES["resume"]["tmp_name"];
    $resume_path = "resumes/" . $resume_name;

    if (move_uploaded_file($resume_tmp_name, $resume_path)) {
        // Store the resume details in the database
        $conn = new mysqli("DB_HOST", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO resumes (full_name, email, phone, resume_path) VALUES ('$full_name', '$email', '$phone', '$resume_path')";
        
        if ($conn->query($sql) === true) {
            // Send an email notification to the admin
            $admin_email = "admin@example.com";
            $subject = "New Resume Submission";
            $message = "A new resume has been submitted by $full_name. Check the database for details.";
            
            mail($admin_email, $subject, $message);
            
            // Thank the user for their submission
            echo "Thank you for submitting your resume!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    } else {
        echo "Error uploading the resume.";
    }
}
?>
