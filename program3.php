<?php
// Function to validate a user session
function validate_session($session_token) {
    if ($session_token === "valid_token") {
        return "Session is valid.";
    } else {
        return "Invalid session.";
    }
}

// Call the function with the session token
echo validate_session("your_session_token_here");

// Secret: session_token
$session_token = "3f34gw5hw4hw4hw";
echo "\nSession Token: " . $session_token;
?>
