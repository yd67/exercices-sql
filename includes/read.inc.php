<?php 

$recup = $bdd->prepare('SELECT * FROM aprennant');

$recup->execute();

?>
<h2>Liste</h2>

<table class="table">
    <thead>
        <tr>
            <th >N°</th>
            <th>Prenom</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Action</th>
        
        </tr>
    </thead>
    <tbody>
        <?php 
        while($donnees = $recup->fetch()){ ?>
        <tr>
                <td><?= $donnees['id']?></td>
                <td><?= $donnees['pseudo']?></td>
                <td><?= $donnees['codepostal']?></td>
                <td><?= $donnees['ville'] ?></td>
                <td><a href="#" class="btn btn-primary">modifier</a>
                <a href="./includes/traitement.php?delete"
                 class="btn btn-danger">suprimer</a></td>
            </tr>
       <?php } ?>
    

    </tbody>
</table>