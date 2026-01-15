<?php
session_start();

$error = "";

// Vérifier si le formulaire est envoyé
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // Vérification des identifiants
    if ($username === "admin" && $password === "1234") {

        // Stocker l'utilisateur en session
        $_SESSION["user"] = $username;

        // Redirection vers le dashboard
        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Connexion</h2>

<?php if ($error): ?>
    <p style="color:red"><?= $error ?></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <br><br>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <br><br>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
