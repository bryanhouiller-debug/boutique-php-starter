<?php
// Déclaration de la variable $status
$status = "standby";  // Change cette valeur pour tester différents statuts

// Utilisation de switch pour afficher un message et une couleur selon le statut
switch ($status) {
    case "standby":
        $message = "⏳ Commande en attente de validation";
        $color = "orange";
        break;
    case "validated":
        $message = "✅ Commande validée";
        $color = "green";
        break;
    case "shipped":
        $message = "🚚 Commande expédiée";
        $color = "blue";
        break;
    case "delivered":
        $message = "🎉 Commande livrée";
        $color = "green";
        break;
    case "canceled":
        $message = "❌ Commande annulée";
        $color = "red";
        break;
    default:
        $message = "Statut inconnu";
        $color = "gray";
        break;
}

// Affichage du message avec la couleur
echo "<span style='color: $color'>$message</span>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span style="color: orange">⏳ Commande en attente de validation</span>

</body>
</html>