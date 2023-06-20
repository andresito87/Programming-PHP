<?php
session_start();

if (!empty($_POST['posted']) && !empty($_POST['email'])) {
    $folder = "surveys/" . strtolower($_POST['email']);
    echo $folder;
// send path information to the session
    $_SESSION['folder'] = $folder;

    if (!file_exists($folder)) {
// make the directory and then add the empty files
        mkdir($folder, 0777, true);
    }

    header("Location: first_page.php");
} else { ?>
    <html lang="es">
    <head>
        <title>Files & folders - On-line Survey</title>
    </head>

    <body bgcolor="white" text="black">
    <h2>Survey Form</h2>

    <p>Please enter your e-mail address to start recording your comments</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="posted" value="1">
        <p>Email address:
            <label>
                <input type="text" name="email" size="45"/>
            </label>
            <br/>
            <input type="submit" name="submit" value="Submit"></p>
    </form>
    </body>
    </html>
<?php }
?>
