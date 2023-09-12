<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if (empty($_POST['name']) || empty($_POST['email'])): ?>
        <?php if (empty(!$_POST)): ?>
            <p> Все поля обязательны!</p>
        <?php endif; ?>
    <form action="index.php" method="post" ">
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="email" name="email"></p>
        <p><button type="submit" name="send_form">Send</button></p>
    </form>

    <?php else:
        print_r($_POST['name']);
        echo "<br/>";
        print_r($_POST['email']);
        ?>
    <?php endif; ?>
</body>
</html>
