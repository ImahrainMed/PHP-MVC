<?php

include __DIR__ . '/../common/header.php';
//$form = $_GET['form'];
?>
<div class="general">
<h1>Créer Un Don</h1>
<form method="post" action="/index.php/ajouter-don.php">
    <label for="">Nom </label> <input type="text" name="_name" placeholder="name" required>
    <label for="">Type de Don </label><select  name="_typedon">
        <option  value="somme d'argents">Somme d'Argents</option>
        <option  value="vêtements">Vêtements</option>
        <option  value="produits alimentaire">Produits alimentaire</option>
    </select>
    <button class="btn btn-info" type="submit">Ajouter</button>
</form>

</div>