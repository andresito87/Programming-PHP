<html>
<head><title>Html y PHP </title></head>
<body>
<!--Form with a text field-->
<?php $fahrenheit = $_GET['fahrenheit']; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Temperatura Fahrenheit:
    <input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>" /><br />
    <input type="submit" value="Convert to Celsius!" />
</form>

<?php if (!is_null($fahrenheit)) {
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("%.2fF is %.2fC", $fahrenheit, $celsius);
} ?>

<!--Form with multiple options-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Select your personality attributes:<br />
    <select name="attributes[]" multiple>
        <option value="perky">Perky</option>
        <option value="morose">Morose</option>
        <option value="thinking">Thinking</option>
        <option value="feeling">Feeling</option>
        <option value="thrifty">Spend-thrift</option>
        <option value="shopper">Shopper</option>
    </select><br />
    <input type="submit" name="s" value="Record my personality!" />
</form>
<?php if (array_key_exists('s', $_GET)) {
    $description = join(' ', $_GET['attributes']);
    echo "You have a {$description} personality.";
} ?>

<!--Form with checkboxes-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
    Select your personality attributes:<br />
    <input type="checkbox" name="attributes[]" value="perky" /> Perky<br />
    <input type="checkbox" name="attributes[]" value="morose" /> Morose<br />
    <input type="checkbox" name="attributes[]" value="thinking" /> Thinking<br />
    <input type="checkbox" name="attributes[]" value="feeling" /> Feeling<br />
    <input type="checkbox" name="attributes[]" value="thrifty" />Spend-thrift<br />
    <input type="checkbox" name="attributes[]" value="shopper" /> Shopper<br />
    <br />
    <input type="submit" name="s" value="Record my personality!" />
</form>
<?php if (array_key_exists('s', $_GET)) {
    $description = join (' ', $_GET['attributes']);
    echo "You have a {$description} personality.";
} ?>

<!--Made form  with a function-->
<?php // fetch form values, if any
$attrs = $_GET['attributes'];

if (!is_array($attrs)) {
    $attrs = array();
}

// create HTML for identically named checkboxes

function makeCheckboxes($name, $query, $options)
{
    foreach ($options as $value => $label) {
        $checked = in_array($value, $query) ? "checked" : '';

        echo "<input type=\"checkbox\" name=\"{$name}\"
 value=\"{$value}\" {$checked} />";
        echo "{$label}<br />\n";
    }
}

// the list of values and labels for the checkboxes
$personalityAttributes = array(
    'perky' => "Perky",
    'morose' => "Morose",
    'thinking' => "Thinking",
    'feeling' => "Feeling",
    'thrifty' => "Spend-thrift",
    'prodigal' => "Shopper"
); ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Select your personality attributes:<br />
    <?php makeCheckboxes('attributes[]', $attrs, $personalityAttributes); ?><br />

    <input type="submit" name="s" value="Record my personality!" />
</form>

<?php if (array_key_exists('s', $_GET)) {
    $description = join (' ', $_GET['attributes']);
    echo "You have a {$description} personality.";
} ?>

<!--Upload Files-->
<form enctype="multipart/form-data"
      action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="10240">
    File name: <input name="toProcess" type="file" />
    <input type="submit" value="Upload" />
</form>

<!--Form Validation-->
<?php
$name = $_POST['name'];
$mediaType = $_POST['media_type'];
$filename = $_POST['filename'];
$caption = $_POST['caption'];
$status = $_POST['status'];

$tried = ($_POST['tried'] == 'yes');

if ($tried) {
    $validated = (!empty($name) && !empty($mediaType) && !empty($filename));

    if (!$validated) { ?>
        <p>The name, media type, and filename are required fields. Please fill
            them out to continue.</p>
    <?php }
}

if ($tried && $validated) {
    echo "<p>The item has been created.</p>";
}

// was this type of media selected? print "selected" if so
function mediaSelected($type)
{
    global $mediaType;

    if ($mediaType == $type) {
        echo "selected"; }
} ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="name" value="<?php echo $name; ?>" /><br />

    Status: <input type="checkbox" name="status" value="active"
        <?php if ($status == "active") { echo "checked"; } ?> /> Active<br />

    Media: <select name="media_type">
        <option value="">Choose one</option>
        <option value="picture" <?php mediaSelected("picture"); ?> />Picture</option>
        <option value="audio" <?php mediaSelected("audio"); ?> />Audio</option>
        <option value="movie" <?php mediaSelected("movie"); ?> />Movie</option>
    </select><br />

    File: <input type="text" name="filename" value="<?php echo $filename; ?>" /><br />

    Caption: <textarea name="caption"><?php echo $caption; ?></textarea><br />

    <input type="hidden" name="tried" value="yes" />
    <input type="submit" value="<?php echo $tried ? "Continue" : "Create"; ?>" />
</form>
</body>
</html>
