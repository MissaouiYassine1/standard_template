<?php
    function input($type, $name, $label, $icon, $value = "", $placeholder = "", $required = false) {
        $req = $required ? "required" : "";
        echo "
        <div class='form-group'>
            <label for='{$name}'><i class='fa-solid fa-{$icon}'></i> {$label}:</label>
            <input type='{$type}' id='{$name}' name='{$name}' 
                value='" . htmlspecialchars($value) . "' 
                placeholder='" . htmlspecialchars($placeholder) . "' {$req}>
        </div>";
    }

    function textarea($name, $label, $icon, $value = "", $placeholder = "", $required = false) {
        $req = $required ? "required" : "";
        echo "
        <div class='form-group'>
            <label for='{$name}'><i class='fa-solid fa-{$icon}'></i> {$label}:</label>
            <textarea id='{$name}' name='{$name}' 
                placeholder='" . htmlspecialchars($placeholder) . "' {$req}>" . htmlspecialchars($value) . "</textarea>
        </div>";
    }


?>
<form action="" method="post">
    <fieldset>
        <legend><i class="fa-solid fa-envelope"></i> Send us a message</legend>
        <?php
            input("text", "name", "Name", "user", "", "Your full name", true);
            input("email", "email", "Email", "envelope", "", "Your email address", true);
            input("text", "subject", "Subject", "tag", "", "Subject of your message", true);
            textarea("message", "Message", "comment", "", "Your message", true);
        ?>
        <div class="form-actions-group">
            <button type="reset"><i class="fa-solid fa-eraser"></i> Reset</button>
            <button type="submit"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
        </div>

    </fieldset>
</form>