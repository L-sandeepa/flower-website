<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "SELECT flower_type, quantity, total_price, order_time FROM Order_Details WHERE buyer_email = '$email' ORDER BY order_time DESC";
    $result = $conn->query($sql);

    $orders = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $orders[] = $row;
        }
        echo json_encode(["status" => "success", "orders" => $orders]);
    } else {
        echo json_encode(["status" => "success", "orders" => []]); // No orders found, but successful query
    }

    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
