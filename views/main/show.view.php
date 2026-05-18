<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= $fruits["name"]?></h1>
<a href="/edit?id=<?= $fruits["id"]?>">rediģēt</a>
<form action="/delete" method="post">
    <input type="hidden" name="id" value="<?= $fruits["id"]?>">
    <input type="submit" value="Izdēst">
</form>
<?php require "views/components/footer.php"; ?>