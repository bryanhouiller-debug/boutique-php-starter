<?php
// Initisation des variables
$errors = [];
$name = '';
$email = '';
$message = '';

// Vérifier si le formulaire e été envoyé
if ($_SERVER["REQUEST_METHODE"] === "POST") {
    // Récupération + sécurisation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation : champs requis
    if ($name === '') {
        $errors[] = "Le nom est obligatoire.";
    }

    if ($email === '') {
        $errors[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide.";
    }

    if ($message === '') {
        $errors[] = "Le message est obligatoire.";
    } elseif (strlen($message) < 10) {
        $errors[] = "Le message doit contenir au moins 10 caractères.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
    
 <h2>Formulaire de contact</h2>

<?php if (!empty($errors)): ?>
    <ul style="color:red;">
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)): ?>
    <h3>Données reçues</h3>
    <p>Nom : <?= htmlspecialchars($name) ?></p>
    <p>Email : <?= htmlspecialchars($email) ?></p>
    <p>Message : <?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<form method="POST">
    <p>
        <label>Nom :</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    </p>

    <p>
        <label>Email :</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
    </p>

    <p>
        <label>Message :</label><br>
        <textarea name="message"><?= htmlspecialchars($message) ?></textarea>
    </p>

    <button type="submit">Envoyer</button>
</form> 
</body>
</html>
