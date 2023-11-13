<?php
include "c:/xampp/htdocs/pweb/controller/eventC.php";
$c = new eventC();
$tab = $c->tab_event();
?>
<center>
    <h1>Listes des evenements</h1>
    <h2>
        <a href="addevent.php">Add evenement</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id evenement</th>
        <th>Nom evenement</th>
        <th>date evenement</th>
        <th>lieu evenement</th>
        <th>duree evenement</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($tab as $event) {
    ?>
    <tr>
        <td><?= $event['id'];   ?></td>
        <td><?= $event['nom'];  ?></td>
        <td><?= $event['datee']; ?></td>
        <td><?= $event['lieu']; ?></td>
        <td><?= $event['duree']; ?></td>
        <td align="center">
            <a href="updateevent.php?id=<?php echo $event['id'];?>">Update</a>
        </td>
        <td><a href="deleteevent.php?id=<?php echo $event['id'];?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>