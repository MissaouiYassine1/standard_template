<?php
$title = "About Us";

// contenu HTML spécifique à cette page
ob_start(); 
?>
    <h1>About HM Vision</h1>
    <p>We are two computer engineering students building innovative web and AI solutions.</p>
<?php
$content = ob_get_clean();

// inclure le layout
include '../templates/layout.php';
?>
