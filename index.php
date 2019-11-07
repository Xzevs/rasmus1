<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main class="container mt-5">
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control">
</div>
    <input type="submit" value="Skicka" class="btn btn-primary">
    </form>

    <div class="mt-5">
    <h1>
    <?php
    //echo "<pre class=\"lead\">" . print_r($_POST, 1) . "</pre";
    $myname = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo $myname;
    ?>
    </h1>

</body>
</html>