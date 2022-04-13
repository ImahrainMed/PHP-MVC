<?php
include __DIR__.'/../common/header.php';

?>
<div class="general">
<h1>Ajouter Donneur</h1>
<form method="post" action="/index.php/ajouter-donneur.php">
    <label for="">Nom </label><input type="text" name="_nom" placeholder="nom" required>
    <label for="">Télèphone </label><input type="text" name="_tel" placeholder="tel" required>

    <button type="submit">Enregistrer</button>
</form>
</div>