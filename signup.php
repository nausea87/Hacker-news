<?php

declare(strict_types=1);

session_start();

if (!isset($_SESSION['error_message'])) {
    $errormessage = "";
} else {
    $errormessage = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles/form.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <div class="formcontainer">
        <h1>Sign up</h1>
        <p class="errormessage"><?= $errormessage; ?></p>
        <form action="/app/users/handleuser.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="editmode" value="new" required>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required />
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required />
            <label for="biography">Biography</label>
            <textarea id="biography" name="biography" placeholder="Write something.." style="height:200px"></textarea>
            <label for="avatar_name">Avatar</label>
            <input type="file" name="avatar_name" id="avatar_name" accept=".png, .jpeg" />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
            <label for="confirm_password">Confirm password</label>
            <input type="password" name="confirm_password" id="confirm_password" required />
            <button type="submit" class="btn">Create account</button>
        </form>
    </div>

</body>

</html>