<?php
require_once 'conn.php';

// Delete existing admin account
try {
    $conn->exec("DELETE FROM admin_acc WHERE admin_user = 'ccbd'");
    $conn->exec("DELETE FROM admin_acc WHERE admin_user = 'admin@admin.com'");
    
    // Insert new admin account
    $username = 'admin@admin.com';
    $password = 'admin123';
    $hashed_password = md5($password);
    
    $stmt = $conn->prepare("INSERT INTO admin_acc (admin_user, admin_pass) VALUES (?, ?)");
    $stmt->execute([$username, $hashed_password]);
    
    echo "<h3>Admin account reset successfully!</h3>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<div style='background:#ff0;padding:10px;margin-top:20px;'>";
    echo "<strong>SECURITY WARNING:</strong> Delete this file immediately after use!";
    echo "</div>";
} catch (PDOException $e) {
    echo "<div style='color:red;'>Error: " . $e->getMessage() . "</div>";
}