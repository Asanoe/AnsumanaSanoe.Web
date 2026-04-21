<?php
// Collect data from the POST request
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password']; // In a real app, we would hash this!

echo "<html><head><link rel='stylesheet' href='styles.css'></head><body style='background:#f9f7f2; text-align:center; padding-top:50px;'>";
echo "<div style='display:inline-block; background:white; padding:40px; border-radius:8px; border:1px solid #d4af37;'>";
echo "<h2 style='color:#2d5a27;'>Signup Successful!</h2>";
echo "<p>Welcome, <strong>" . htmlspecialchars($fullname) . "</strong>.</p>";
echo "<p>A confirmation has been sent to: <em>" . htmlspecialchars($email) . "</em></p>";
echo "<br><a href='index.html' style='color:#2d5a27;'>Return to Home</a>";
echo "</div></body></html>";
?>
