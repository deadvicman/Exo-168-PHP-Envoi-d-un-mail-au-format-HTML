<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = 'deadvicmangame@gmail.com';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset';

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                <h1>Bonjour !</h1>
                <p>Voici les dernières actualités de notre entreprise :</p>
                <ul>
                    <li>Actualité 1</li>
                    <li>Actualité 2</li>
                    <li>Actualité 3</li>
                </ul>
                <p>Nhésitez pas à nous contacter pour plus dinformations.</p>
            </div>
        </body>
    </html>
';

foreach ($to as $email) {
    if (mail($email, 'Mes actualités', $html, implode("\r\n", $headers))) {
        echo 'Email envoyé a '.$email.' nickel!<br>';
    } else {
        echo 'erreur vers '.$email.'<br>';
    }
}

