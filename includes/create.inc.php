
<h2>Ajouter</h2>
<form method="POST" action="./includes/traitement.php">
        
    
    <div class="form-goup">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo" class="form-control" placeholder="votre pseudo">
     </div>

     <div class="form-goup">
          <label for="ville">ville</label>
          <input type="text" class="form-control" placeholder=" votre ville " name="ville">
     </div>
     <div class="form-goup"  >
        <label for="codepostal">code postal</label>
        <input type="number" name="codepostal" class="form-control" placeholder="votre code postal">
      </div>

        <div class="text-right P-3 ">
            <button type="submit" class="btn btn-dark "> enregistrer les données </button>

        </div>

</form>