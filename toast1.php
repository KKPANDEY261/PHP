<!--<?php
// Start the session to store toast messages between page loads
session_start(); 

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data here (add your validation logic)
    $success = true; // Assume submission is successful for this demo
    
    // Store toast message in session
    $_SESSION['toast_message'] = $success 
        ? 'Submitted successfully!' 
        : 'Error: Submission failed!';
    $_SESSION['toast_type'] = $success ? 'success' : 'error';
    
    // Use Post/Redirect/Get pattern to prevent form resubmission
    header('Location: '.$_SERVER['PHP_SELF']);
    exit();
}

// Retrieve toast message from session and then clear it
$toast_message = $_SESSION['toast_message'] ?? null;
$toast_type = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_message'], $_SESSION['toast_type']);
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Notification</title>
 <!--   <style>
        /* Toast notification styling */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        .toast {
            padding: 15px 25px;
            margin-bottom: 10px;
            border-radius: 4px;
            color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            animation: slideIn 0.5s forwards, fadeOut 0.5s 2.5s forwards;
        }
        .success { background-color: #28a745; } /* Green */
        .error { background-color: #dc3545; }   /* Red */
        
        /* Animation for toast entry */
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        /* Animation for toast exit */
        @keyframes fadeOut {
            to { opacity: 0; }
        }
    </style>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>
<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>