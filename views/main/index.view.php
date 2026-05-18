<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Augļi</h1>
<form action="/" method="get">
    <input type="text" name="search" id="search">
    <input type="submit" value="Meklēt">
</form>
<p><?= $error["contents"] ?? ""?></p>
<ul>
    <?php foreach ($fruits as $key => $value) { ?>
        <li><a href="/show?id=<?=$value['id'];?>"><?=htmlspecialchars($value['name']);?></a></li>
    <?php } ?>
</ul>
<?php if (empty($fruits)) {
echo "netika atrasts neviens rezūltāts kas atbilsts prasībām x~x";
} ?>
<?php require "views/components/footer.php"; ?>