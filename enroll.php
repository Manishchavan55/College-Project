<?php
$nameError = $emailError = $contactError = $messageError = $course_name="";

if (isset($_POST['btnsave'])) {
    $conn = mysqli_connect("localhost", "root", "", "bcs_ty23-24_b3");
    if (!$conn) {
        die("Error" . mysqli_connect_error());
    } else {
        if ($conn->select_db('bcs_ty23-24_b3')) {
            // Database selected successfully
        }
    }

    @$name = $_POST["txtname"];
    @$email = $_POST["txtEmail"];
    @$contact = $_POST["txtcontact"];
    @$message = $_POST["txtmessage"];
    @$course_name = $_POST["txtcourse_name"];
    

    if (empty($name)) {
        $nameError = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            $nameError = "Only letters and white space are allowed..";
        }
    }

    if (empty($email)) {
        $emailError = "Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    if (empty($contact)) {
        $contactError = "Contact is required";
    } else {
        if (strlen($contact) != 10) {
            $contactError = "Contact length should be 10 digits";
        }
    }

    if (empty($message)) {
        $messageError = "Message should not be empty";
    }

    if (empty($nameError) && empty($emailError) && empty($contactError) && empty($messageError) ) {
      $sql = "INSERT INTO `tblenrollments`(`full_name`, `email`, `contact`, `course_name`, `stdmessage`) VALUES('$name','$email','$contact','$course_name','$message')";
      mysqli_query($conn, $sql);
    echo '<script> alert("🎉 Thank you for enrolling! We look forward to connecting with you soon. 🌟 Stay tuned for updates and exciting news! 📲 "); window.location.href = "index.php";</script>';
      exit;
  }
  
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fadeInUp {
      animation-name: fadeInUp;
    }
  </style>
</head>

<body>
   
  <div class="container">
    <h2 class="text-success text-center animated fadeInUp">Enroll Now</h2>
    <form action="" method="post">
      <div class="form-group animated fadeInUp">
        <label for="txtname">Name</label>
        <input type="text" class="form-control" name="txtname" id="txtname">
        <h4 class="text-danger">
          <?php echo @$nameError; ?>
        </h4>
      </div>
      <div class="form-group animated fadeInUp">
        <label for="txtEmail">Email</label>
        <input type="text" class="form-control" name="txtEmail" id="txtEmail">
        <h4 class="text-danger">
          <?php echo @$emailError; ?>
        </h4>
      </div>
      <div class="form-group animated fadeInUp">
        <label for="txtcontact">Contact</label>
        <input type="text" class="form-control" name="txtcontact" id="txtcontact">
        <h4 class="text-danger">
          <?php echo @$contactError; ?>
        </h4>
      </div>
      <div class="form-group animated fadeInUp">
        <label for="txtcourse_name$course_name">Course ID</label>
        <input type="text" class="form-control" name="txtcourse_name" id="txtcourse_name"
          value="<?php echo isset($_POST['Course_Name']) ? $_POST['Course_Name'] : ''; ?>" readonly>
      </div>

      <div class="form-group animated fadeInUp">
        <label for="txtmessage">Message</label>
        <textarea class="form-control" name="txtmessage" id="txtmessage" rows="3"></textarea>
        <h4 class="text-danger">
          <?php echo @$messageError; ?>
        </h4>
      </div>

      
      <input type="hidden" name="hdnenroll" value="<?php echo @$course_name; ?>">
      

      <input type="submit" class="btn btn-primary btn-block animated fadeInUp" name="btnsave" value="Register Now">
    </form>

    <?php
    
    ?>
  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php echo ($course_name); ?>