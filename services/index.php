<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php 
        // Include the header component
        include '../includes/header.php';
    ?>
    <dialog id="sampleDialog">
        <h2>Welcome to Our Website</h2>
        <p>This is a sample dialog content.</p>
        <button onclick="this.parentElement.close()">Close</button>
    </dialog>
    <!-- <button onclick="document.getElementById('sampleDialog').showModal()">Open Dialog</button>
 -->
    <?php
        // Include the footer component
        include '../includes/footer.php';
    ?>
</body>
</html>