<?php
function member($name, $title, $imgSrc, $altText) {
    echo "
    <div class='member-card card'>
        <img src='" . htmlspecialchars($imgSrc) . "' alt='" . htmlspecialchars($altText) . "' class='member-img'>
        <h3 class='member-name'>" . htmlspecialchars($name) . "</h3>
        <h4 class='member-title'>" . htmlspecialchars($title) . "</h4>
    </div>";
}
$title = "About Us";

// contenu HTML spécifique à cette page
ob_start(); 
?>
    <h1>About HM Vision</h1>
    <!-- <blockquote>
        <p>We are two computer engineering students building innovative web and AI solutions.</p>
        <p>Our mission is to create user-friendly applications that leverage the power of artificial intelligence.</p>
        <p>We believe in the transformative potential of technology and strive to make a positive impact on society through our work.</p>
        <p>Our vision is to be at the forefront of technological innovation, driving progress and making a difference in the world.</p>
        <p>We are committed to continuous learning and improvement, ensuring that our skills and knowledge remain at the cutting edge.</p>
        <p>Through collaboration and creativity, we aim to deliver exceptional value to our clients and users.</p>
    </blockquote> -->
    <div class="quote-box card">
        <p>We are two computer engineering students building innovative web and AI solutions.</p>
        <p>Our mission is to create user-friendly applications that leverage the power of artificial intelligence.</p>
        <p>We believe in the transformative potential of technology and strive to make a positive impact on society through our work.</p>
        <p>Our vision is to be at the forefront of technological innovation, driving progress and making a difference in the world.</p>
        <p>We are committed to continuous learning and improvement, ensuring that our skills and knowledge remain at the cutting edge.</p>
        <p>Through collaboration and creativity, we aim to deliver exceptional value to our clients and users.</p>
    </div>

    <div class="container">
        <div class="about-container">
            <?php
                member("Missaoui Yassine", "Co-Founder & AI Specialist", "../assets/images/my.jpg", "Missaoui Yassine");
                member("Hizi Amine", "Co-Founder & Web Developer", "../assets/images/ha.jpg", "Hizi Amine");
            ?>
        </div>
    </div>
<?php
$content = ob_get_clean();

// inclure le layout
include '../templates/layout.php';
?>
