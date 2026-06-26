<?php

// ======================================
// Simple PHP Program
// ======================================

// Print a welcome message
echo "<h1 style='color:blue;'>Hello World!</h1>";

// Variables
$name = "Sathish";
$age  = 30;

// Display variables
echo "<p style='color:green;'>Name: $name</p>";
echo "<p style='color:orange;'>Age: $age</p>";

// Conditional Statement
if ($age >= 18) {
    echo "<p style='color:purple;'>Status: Adult</p>";
} else {
    echo "<p style='color:red;'>Status: Minor</p>";
}

// Loop Example
echo "<h3 style='color:brown;'>Numbers:</h3>";

for ($i = 1; $i <= 5; $i++) {
    echo "<span style='color:teal;'>$i </span>";
}

?>
