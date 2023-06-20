<html lang="es">
<head><title>Front Door</title></head>
<?php
$backgroundName = $_COOKIE['bg'];
$foregroundName = $_COOKIE['fg'];
?>
<body style="background-color:<?php echo $backgroundName; ?>">

<h1 style="color:<?php echo $foregroundName; ?>">Welcome to the Store</h1>

<p style="color:<?php echo $foregroundName; ?>">We have many fine products for you to view. Please feel free to browse
    the aisles and stop an assistant at any time. But remember, you break it
    you bought it!</p>

<p>Would you like to <a href="colors.php">change your preferences?</a></p>

</body>
</html>