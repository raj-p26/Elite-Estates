<?php
    error_reporting(0);
?>

<div id="contact">
    <h2>contact us</h2>
    <form class="contact-form" method="post">
        <div class="input-box">
            <input type="text" name="full-name" id="full-name" required />
            <label for="full-name">Full-Name</label>
        </div>
        <div class="input-box">
            <input type="email" name="email" id="user-email" required />
            <label for="user-email">Email</label>
        </div>
        <div class="input-box">
            <textarea name="message" id="message" cols="26" rows="1" required></textarea>
            <label for="message">Feedback</label>
        </div>
        <button class="contact-form-submit" type="submit" <?php if ($_SESSION['isAdmin']) echo 'disabled'?>>submit</button>
    </form>
</div>