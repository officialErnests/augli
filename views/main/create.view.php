<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Izveido augli!</h1>
<form action="/create" method="post">
    <input type="text" name="name" id="name">
    <br>
    <p><?= $error["contents"] ?? ""?></p>
    <input type="submit" value="create">
</form>

<?php require "views/components/footer.php"; ?>