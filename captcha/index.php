<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title></title>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

    <form action="action.php" method="POST">
        <p><input type="email" placeholder="Please enter email">
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
        <p><input type="submit" value="Submit">
    </form>

</body>
</html>
