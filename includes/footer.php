<?php 
    class ContactItem {
        public $type;
        public $value;
        public $icon;

        public function __construct($type, $value, $icon) {
            $this->type = $type;
            $this->value = $value;
            $this->icon = $icon;
        }

        public function render() {
            $dialog="<dialog id='contactDialog'>
                <h2>Oops!</h2>
                <p>{this.type} isn't available yet</p>
                <button onclick='this.parentElement.close()'>Close</button>";
            echo "
            <div class='contact-item'>
                <i class='fa-solid fa-{$this->icon}'></i>
                <span>{$this->type}: {$this->value}</span>
            </div>";
        }
    }
?>
<footer>
    <div>
        <div id="footer-infos">
            <div class="footer-item">
                <div class="footer-item-title">
                    <h3>HM Vision</h3>
                    <p>Your vision, our mission.</p>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-item-title">
                    <h3>Contact</h3>
                    <p>localisation</p>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-item-title">
                    <h3>Follow Us</h3>
                    <p>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <p>&copy; 2026 My Website. All rights reserved.</p>
    </div>
    

</footer>