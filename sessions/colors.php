<html lang="es">
<head><title>Set Your Preferences</title></head>
<body>
<form action="prefs_session.php" method="post">
    <p>Background:
        <label>
            <select name="background">
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
            </select>
        </label><br/>

        Foreground:
        <label>
            <select name="foreground">
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
            </select>
        </label>
    </p>

    <input type="submit" value="Change Preferences">
</form>

</body>
</html>