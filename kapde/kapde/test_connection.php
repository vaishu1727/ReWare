<?php
include 'config.php'; // Include database connection

if ($conn) {
    echo "Database Connected Successfully!";
} else {
    echo "Database Connection Failed!";
}
?>
