
<?php
// DEVSECOPS COMPLIANCE TESTBED APPLICATION

// Flaw 1: Simulated Hardcoded Administrative Token (Secrets Risk)
$system_admin_token = "ghp_MockSecretTokenForTestingPipeline12345";

// Flaw 2: Reflected Cross-Site Scripting (SAST Risk)
// Taking raw input from the URL parameters and printing it directly to the DOM without sanitization
$developer_name = $_GET['name'] ?? 'Anonymous Engineer';

echo "<html>";
echo "<body>";
echo "<h1>DevSecOps Control Panel</h1>";
echo "<p>Active Operator: " . $developer_name . "</p>"; 
echo "</body>";
echo "</html>";
?>