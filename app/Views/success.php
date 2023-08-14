<html>
<head>
    <title>My Form</title>
</head>
<body>

    <h3>Your form was successfully submitted!</h3>

    <p>
    Username: <?= esc($username) ?><br>
    Password: <?= esc($password) ?><br>
    Email: <?= esc($email) ?><br>
    Fruit: <?= esc(implode(', ', $fruit)) ?><br>
    </p>

    <p><?= anchor('form1', 'Go to form1') ?></p>
    <p><?= anchor('form2', 'Go to form2') ?></p>

</body>
</html>
