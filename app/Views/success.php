<html>
<head>
    <title>My Form</title>
</head>
<body>

    <h3>Your form was successfully submitted!</h3>

    <p>
    Username: <?= $username ?><br>
    Password: <?= $password ?><br>
    Email: <?= $email ?><br>
    </p>

    <p><?= anchor('form1', 'Go to form1') ?></p>
    <p><?= anchor('form2', 'Go to form2') ?></p>

</body>
</html>
