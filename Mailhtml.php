<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Envoi de l'email
        $to = "djuny.alain@gmail.com";
        $subject = "Nouvelle inscription";
        $message = "Une nouvelle inscription a été reçue:\n\n";
        $message .= "Nom: " . $nom . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Mot de passe: " . $mot_de_passe . "\n";

        // Ajoutez les en-têtes de l'email
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // Envoi de l'email
        mail($to, $subject, $message, $headers);

        echo "Merci de vous être inscrit. Un email a été envoyé à l'adresse spécifiée.";
    }
    ?>
</body>
</html>
