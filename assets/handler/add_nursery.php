<?php
session_start();

if (isset($_POST['submit'])) {
    require_once('connection.php');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nursery_name = $_POST['nursery_name'];
    $contact_information = $_POST['contact_information'];
    $address = $_POST['address'];
    $nursery_img = $_POST['nursery_img'];
    $staff_id = $_POST['staff_id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `nursery` (`name`, `contact_information`, `address`, `staff_id`, `img`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $nursery_name, $contact_information, $address, $staff_id, $nursery_img);

        // Execute the statement
        if ($stmt->execute()) {
             header("Location: ../../Pages/dashboard.php");
            exit();
        } else {
            // Handle execution error
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
            error_log($stmt->error);
        }

        // Close the statement
        $stmt->close();

    // Close the connection
    $conn->close();
}
?>











