<?php
// Process form data if submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    
    if ($age >= 18) {
        $message = "You are an adult.";
    } elseif ($age >= 13) {
        $message = "You are a teenager.";
    } else {
        $message = "You are a child.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Checker</title>
</head>
<body>
    <h1>Age Verification</h1>
    
    <form method="POST">
        Enter your age:
         <input type="number" name="age" required>
        <input type="submit" value="Check">
    </form>
    
    <?php if (isset($message)): ?>
    <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>
</body>
</html>