
<?php
require_once('./includes/bdd.inc.php');

?>



<html lang="fr">
<head>
<?php
   require('./templates/head.inc.html');
   ?>
</head>
<body>
    
    <header>
        <?php 
           require('./templates/header.inc.html'); 
        ?> 
    </header>
    
    <main> <?php  require('./template/main.inc.html')?> </main>

    <footer>
        <?php 
           require('./templates/footer.inc.html');
        ?>
    </footer>


    
</body>
</html>