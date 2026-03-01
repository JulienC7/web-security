<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($email) && isset($password)) {
    // Version démo - utilisateurs de test
    $demo_users = [
        ['email' => 'admin@test.com', 'password' => 'admin123', 'role' => 'Admin'],
        ['email' => 'user@test.com', 'password' => 'user123', 'role' => 'User']
    ];
    
    $authenticated = false;
    foreach ($demo_users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['user_id'] = 1;
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $authenticated = true;
            break;
        }
    }
    
    if (!$authenticated) {
        $error = 'Email ou mot de passe invalide. Utilisez admin@test.com/admin123 ou user@test.com/user123';
    } else {
        header('Location: index.php');
        exit;
    }
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
    <title>Login</title>
</head>

<body>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <?php
    include "includes/header.html";
    ?>
    <main>
        <section class="form-section">
            <form class="form" action="" method="post">
                <h1 class="title">Log into your account</h1>
                <input class="text" type="email" name="email" id="email" placeholder="Insert your email">
                <input class="text" type="password" name="password" id="password" placeholder="Insert your password">
                <br>
                <button class="text" type="submit">Login</button>
                <button class="text"><a href="signup.php">Sign Up</a></button>
            </form>
        </section>
    </main>
    <?php
    include "includes/footer.html";
    ?>
</body>

</html>