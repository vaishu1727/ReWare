<?php
include 'config.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $conditionn = $_POST['conditionn'];

    // Insert data into Donor table
    $sql_donor = "INSERT INTO Donor (first_name, last_name, email, phone_no, address, city, state) 
                  VALUES ('$first_name', '$last_name', '$email', '$phone_no', '$address', '$city', '$state')";

    if ($conn->query($sql_donor) === TRUE) {
        $donor_id = $conn->insert_id; // Get last inserted donor ID

        // Insert data into Clothes table
        $sql_clothes = "INSERT INTO Clothes (donor_id, category, size, conditionn) 
                        VALUES ('$donor_id', '$category', '$size', '$conditionn')";

        if ($conn->query($sql_clothes) === TRUE) {
            echo "Donation successfully recorded!";
        } else {
            echo "Error: " . $sql_clothes . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_donor . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
