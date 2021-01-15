
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
    
    <main class="container-fluid" > 
        <div class="row">
            <div class="col-3">
                 <?php 
                 require('./templates/nav.inc.html')
                  ?>  
          </div>
            <div class="col-9" >
                <?php 

                if(isset($_GET['read'])){

                  include('./includes/read.inc.php');
                }
                elseif(isset($_GET['create'])){
                    include('./includes/create.inc.php');
                }
                else{
                    echo'<h2 class="p-5"> bienvenue </h2>';
                }
                
                
                ?>         
            </div>
        </div> 

       
     </main>

    <footer>
        <?php 
           require('./templates/footer.inc.html');
        ?>
    </footer>


    
</body>
</html>