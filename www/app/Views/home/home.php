<?php
    include __DIR__.'/../common/header.php';
    $alldonners = $_GET["alldonners"];
    $filtred_donations = $_GET["filtred_donations"];

?>
<div class="general">
<form action="/" method="post">
    <label for="sdonner">Filtrer les dons par Donneur</label>
<select  id="sdonner" name="selecteddonner" >
<?php
$donner = new \App\Models\Donner();
foreach ($alldonners as $donner){
    ?>
    <option  value="<?php echo $donner->getId(); ?>"> <?php echo $donner->getFullName(). ' - '.  $donner->getId(); ?></option>

<?php
}
?>
</select>
    <input class="btn btn-success" type="submit" value="filtrer">
</form>

<table border="1px" class="table table-dark table-striped">
    <tr>
        <th>Id Don</th>
        <th>Nom</th>
        <th>Type du Don</th>
        <th>Donneur</th>
    </tr>
    <?php
    if(!empty($filtred_donations)){

            $fd = new \App\Models\Donation();

    foreach ($filtred_donations as $fd ){

        ?>
        <tr>
            <td><?php echo $fd->getId(); ?></td>
            <td><?php echo $fd->getNom();?></td>
            <td><?php echo $fd->getType(); ?></td>
            <td><?php echo $fd->getDonnerId(); ?></td>
        </tr>
    <?php
    }}

    ?>
</table>
</div>
    <?php

?>


