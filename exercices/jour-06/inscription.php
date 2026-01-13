<?php
// Initialisation
$errors = [];
$values = [
    'username' => '',
    'email' => ''
];

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmation = $_POST['confirmation'] ?? '';

    // Garder les valeurs correctes
    $values['username'] = $username;
    $values['email'] = $email;

    // Username : 3-20 caractères, alphanumérique
    if ($username === '') {
        $errors['username'] = "Le nom d'utilisateur est obligatoire.";
    } elseif (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
        $errors['username'] = "Entre 3 et 20 caractères alphanumériques.";
    }

    // Email valide
    if ($email === '') {
        $errors['email'] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email invalide.";
    }

    // Mot de passe
    if (strlen($password) < 8) {
        $errors['password'] = "Le mot de passe doit contenir au moins 8 caractères.";
    }

    // Confirmation
    if ($password !== $confirmation) {
        $errors['confirmation'] = "Les mots de passe ne correspondent pas.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        .error { color: red; font-size: 0.9em; }
        input { display: block; margin-bottom: 5px; }
    </style>
</head>
<body>

<h2>Inscription</h2>

<form method="POST">
    <label>Nom d'utilisateur</label>
    <input type="text" name="username" value="<?= htmlspecialchars($values['username']) ?>">
    <?php if (isset($errors['username'])): ?>
        <div class="error"><?= $errors['username'] ?></div>
    <?php endif; ?>

    <label>Email</label>
    <input type="email" name="email" value="<?= htmlspecialchars($values['email']) ?>">
    <?php if (isset($errors['email'])): ?>
        <div class="error"><?= $errors['email'] ?></div>
    <?php endif; ?>

    <label>Mot de passe</label>
    <input type="password" name="password">
    <?php if (isset($errors['password'])): ?>
        <div class="error"><?= $errors['password'] ?></div>
    <?php endif; ?>

    <label>Confirmation</label>
    <input type="password" name="confirmation">
    <?php if (isset($errors['confirmation'])): ?>
        <div class="error"><?= $errors['confirmation'] ?></div>
    <?php endif; ?>

    <button type="submit">S'inscrire</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)): ?>
    <p style="color:green;">Inscription réussie 🎉</p>
<?php endif; ?>

</body>
</html>
