<?php
require_once 'db_connect.php';

// SQL to create the table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS Order_Details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    buyer_name VARCHAR(255) NOT NULL,
    flower_type VARCHAR(100) NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10, 2) NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'Order_Details' checked/created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
