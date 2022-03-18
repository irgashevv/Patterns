<?php require 'header.php'; ?>
<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name ?>
    </li>
<?php endforeach; ?>
<h1>Enter a name</h1>

<form action="/CRUD/names" method="POST">
    <input type="text" name="name"/>
    <button type="submit">Send</button>
</form>

<?php require 'footer.php'; ?>
