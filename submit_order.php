<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $date = $conn->real_escape_string($_POST['date']);
    $message = $conn->real_escape_string($_POST['message']);
    $product_name = $conn->real_escape_string($_POST['product_name']);
    $unit_price = floatval($_POST['product_price']); // Ensure it's a number
    $quantity = intval($_POST['quantity']); // Get quantity
    
    // Calculate total price
    $total_price = $unit_price * $quantity;

    // Insert into the original Orders table (Optional, keeping for backup if needed)
    // $sql_old = "INSERT INTO Orders ..."; 

    // Insert into the NEW separate table 'Order_Details' as requested
    $sql = "INSERT INTO Order_Details (buyer_name, buyer_email, flower_type, quantity, total_price)
            VALUES ('$name', '$email', '$product_name', '$quantity', '$total_price')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Order details saved successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }

    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
