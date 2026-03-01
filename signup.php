<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, []);
}

if (isset($email) && isset($password)) {
    // Version démo - affiche un message
    $signup_message = '<div style="background: #d4edda; padding: 15px; margin: 10px 0; border-radius: 5px; border: 1px solid #28a745;">
        <strong>✅ Mode Démo</strong><br>
        L\'inscription nécessite une base de données MySQL connectée.<br>
        Pour tester, utilisez les comptes démo: <strong>admin@test.com/admin123</strong> ou <strong>user@test.com/user123</strong>
    </div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Russo+One&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <?php
    include "includes/header.html";
    ?>
    <main>
        <section class="form-section">
            <form class="form" action="" method="post">
                <h1 class="title">Create your account</h1>
                <input class="text" type="text" name="email" id="email" placeholder="Insert your email">
                <input class="text" type="text" name="password" id="password" placeholder="Insert your password">
                <br>
                <button class="text" type="submit">Sign up</button>
            </form>
        </section>
    </main>
    <?php
    include "includes/footer.html";
    ?>
</body>

</html>