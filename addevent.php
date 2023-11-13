<?php

include '../controller/eventC.php';
include '../model/event.php';

// create event
$event = null;

// create an instance of the controller
$eventC = new eventC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["lieu"]) &&
    isset($_POST["date"]) &&
    isset($_POST["duree"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["lieu"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["duree"])
    ) {
        $event = new event(
            null,
            $_POST['nom'],
            $_POST['lieu'],
            $_POST['date'],
            $_POST['duree']
        );
        $eventC->ajouterevenement($event);
        header('Location:listevent.php');
    }
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event </title>
</head>

<body>
    <a href="listJoueurs.php">Back to list </a>
    <hr>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" />
                </td>
            </tr>
            <tr>
                <td><label for="lieu">Lieu :</label></td>
                <td>
                    <input type="text" id="lieu" name="lieu" />
                </td>
            </tr>
            <tr>
                <td><label for="date">Date :</label></td>
                <td>
                    <input type="date" id="date" name="date" />
                </td>
            </tr>
            <tr>
                <td><label for="duree">Duree :</label></td>
                <td>
                    <input type="text" id="duree" name="duree" />
                </td>
            </tr>


            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>

    </form>
</body>

</html>