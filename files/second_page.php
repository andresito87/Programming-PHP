<?php
session_start();
$folder = $_SESSION['folder'];
$filename = $folder . "/question2.txt";

// open file for reading then clean it out
$file_handle = fopen($filename, "a+");

// pick up any text in the file that may already be there
if (filesize($filename) > 0) {
    $comments = fread($file_handle, filesize($filename));
}
fclose($file_handle); // close this handle

if ($_POST['posted']) {
    // create file if first time and then save
    //text that is in $_POST['question2']
    $question2 = $_POST['question2'];

    // open file for total overwrite
    $file_handle = fopen($filename, "w+");

    if (flock($file_handle, LOCK_EX)) { // do an exclusive lock
        if (!fwrite($file_handle, $question2)) {
            echo "Cannot write to file ($filename)";
        }

        flock($file_handle, LOCK_UN); // release the lock
    }

    // close the file handle and redirect to next page ?
    fclose($file_handle);

    header("Location: last_page.php");
} else { ?>
    <html lang="es">
    <head>
        <title>Files & folders - On-line Survey</title>
    </head>

<body>
<table border="0">
    <tr>
        <td>Please enter your comments to the following survey statement:</td>
    </tr>

    <tr bgcolor="lightblue">
        <td>It's a funny thing freedom. I mean how can any of us <br/>
            be really free when we still have personal possessions.
            How do you respond to the previous statement?
        </td>
    </tr>

    <tr>
        <td>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
                <input type="hidden" name="posted" value="1"><br/>
                <label>
                    <textarea name="question2" rows="12" cols="35"><?= $comments ?></textarea>
                </label>
        </td>
    </tr>

    <tr>
        <td><input type="submit" name="submit" value="Submit"></form></td>
    </tr>
</table>
<?php } ?>