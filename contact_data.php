<?php
 
$conn = mysqli_connect("localhost", "AmitShinde", "Pavi@21", "bcs_ty23-24_b3");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables for form data and errors
$name = $email = $subject = $phone = $message = "";
$nameErr = $emailErr = $subjectErr = $phoneErr = $messageErr = "";
$successMSG = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["txtName"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["txtName"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["txtEmail"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["txtEmail"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate subject
    if (empty($_POST["txtSubject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = test_input($_POST["txtSubject"]);
        // Check if subject only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
            $subjectErr = "Only letters and white space allowed";
        }
    }

    // Validate phone
    if (empty($_POST["txtPhone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["txtPhone"]);
        // Check if phone number only contains numbers
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "Only numbers allowed";
        }
    }

    // Validate message
    if (empty($_POST["txtmessage"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["txtmessage"]);
    }

    // If all fields are valid, proceed with database insertion
    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($phoneErr) && empty($messageErr)) {
        // Prepare SQL statement using prepared statement
        $sql = "INSERT INTO `tblcontact` (`name`, `email`, `subject`, `contact`, `Message`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters and execute statement
        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $phone, $message);
        mysqli_stmt_execute($stmt);

        // Check if insertion was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $successMSG = "Form submitted successfully!";
            // Optionally redirect or display success message
            echo "<script>alert('Message sent successfully..🎉 Thank you for connecting with us..! We look forward to seeing you soon..');</script>";
            echo "<script>window.location = 'index.php?success=true';</script>"; // Redirect to success page or homepage
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
?>