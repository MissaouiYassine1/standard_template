<?php 
    $title = "Contact Us";
    ob_start();
?>
    <h1>Contact HM Vision</h1>
    <p>Please fill out the form below to get in touch with us.</p>
    <div class="contact-container">
        <div class="contact-info card">
            <h2>Contact Information</h2>
            <div class="info-item">
                <i class="fa-solid fa-phone"></i>
                <span>Phone: +123 456 7890</span>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-envelope"></i>
                <span>Email: contact@hmvision.com</span>
            </div>
        </div>
        <?php include 'form.php'; ?>
    </div>
    
    <p>Thank you for reaching out to us!</p>
    <dialog id="sampleDialog">
        <h2>Welcome to Our Website</h2>
        <p>This is a sample dialog content.</p>
        <button onclick="this.parentElement.close()">Close</button>
    </dialog>
    <!-- <button onclick="document.getElementById('sampleDialog').showModal()">Open Dialog</button>
    -->
    <script>
        // You can add JavaScript here if needed
    </script>

    
<?php
    $content = ob_get_clean();
    include '../templates/layout.php';
?>