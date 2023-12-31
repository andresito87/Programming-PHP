<?php
session_start();
$folder = $_SESSION['folder'];
$filename = $folder . "/question1.txt";

// open file for reading then clean it out
$file_handle = fopen($filename, "a+");

// pick up any text in the file that may already be there
$comments = file_get_contents($filename);
fclose($file_handle); // close this handle

if (!empty($_POST['posted'])) {
    // create file if first time and then
    //save text that is in $_POST['question1']
    $question1 = $_POST['question1'];
    $file_handle = fopen($filename, "w+");

    // open file for total overwrite
    if (flock($file_handle, LOCK_EX)) {
        // do an exclusive lock
        if (!fwrite($file_handle, $question1)) {
            echo "Cannot write to file ($filename)";
        }

        // release the lock
        flock($file_handle, LOCK_UN);
    }

    // close the file handle and redirect to next page ?
    fclose($file_handle);
    header("Location: second_page.php");
} else { ?>
    <html>
    <head>
        <title>Files & folders - On-line Survey</title>
    </head>

<body>
<table border="0">
    <tr>
        <td>Please enter your response to the following survey question:</td>
    </tr>
    <tr bgcolor=lightblue>
        <td>
            What is your opinion on the state of the world economy?<br/>
            Can you help us fix it ?
        </td>
    </tr>
    <tr>
        <td>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="posted" value="1"><br/>
                <label>
                    <textarea name="question1" rows=12 cols=35><?= $comments ?></textarea>
                </label>
        </td>
    </tr>

    <tr>
        <td><input type="submit" name="submit" value="Submit"></form></td>
    </tr>
</table>
<?php } ?>