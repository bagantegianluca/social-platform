<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>
</head>

<body>
    <h1>Social Platform</h1>
    <ul>
        <?php foreach ($usersWithVideo as $user) : ?>
            <li>
                <h3 style="margin-bottom: 0">Id: <?= $user['id'] ?></h3>
                <div>Utente: <?= $user['username'] ?></div>
                <div>Video postati: <?= $user['totalVideos'] ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>