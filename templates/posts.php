<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>

    <!-- Import Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Import Font Awesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Import Google Fonts Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Social Platform</h1>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col">
                    <div class="card">
                        <h3><?= $post['title'] ?></h3>
                        <div class="date"><?= date('d/m/Y H:i', strtotime($post['date'])) ?></div>
                        <hr>
                        <div class="card-footer">
                            <div><i class="fa-regular fa-user"></i> <?= $post['username'] ?></div>
                            <div><i class="fa-regular fa-thumbs-up"></i> <?= $post['likes'] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>