<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $address = $_POST['address'];

    // Admin email address
    $admin_email = "adityashukla832@Gmail.com";

    // Email subject
    $subject = "New Order: " . $product;

    // Email message
    $message = "Product: " . $product . "\n";
    $message .= "Address: " . $address;

    // Send email
    $result = mail($admin_email, $subject, $message);

    // Return response to the client
    if ($result) {
        http_response_code(200);
        echo "Email sent successfully!";
    } else {
        http_response_code(500);
        echo "Failed to send email!";
    }
} else {
    http_response_code(403);
    echo "Access forbidden!";
}
?>
