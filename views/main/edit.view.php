<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Izveido augli!</h1>
<form action="/edit?id=<?= $fruits["id"]?>" method="post">
    <input type="text" name="name" id="name" value="<?= $to_edit ?? ""?>">
    <br>
    <p><?= $error["contents"] ?? ""?></p>
    <input type="submit" value="edit">
</form>

<?php require "views/components/footer.php"; ?>