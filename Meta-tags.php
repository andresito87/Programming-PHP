<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Ejemplo de página web">
    <meta name="keywords" content="ejemplo, html, meta tags">
    <meta name="author" content="John Doe">
</head>
<body>
<?php
$tags = get_meta_tags(__FILE__);

foreach ($tags as $name => $content) {
    echo $name . ': ' . $content . "<br>";
}
?>
</body>
</html>