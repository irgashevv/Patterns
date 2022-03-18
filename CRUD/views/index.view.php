<?php require 'header.php'; ?>
<h1>My tasks</h1>
<h1>Enter a name</h1>

<form action="/CRUD/names" method="POST">
    <input type="text" name="name"/>
    <button type="submit">Send</button>
</form>

<?php require 'footer.php'; ?>
