<?php
require_once __DIR__ . '/models/Post.php';
require_once __DIR__ . '/models/Media.php';

$post1 = new Post(1, 'Primo post', new DateTime(), 15, 'Gianluca B.', ['milestone', 'laravel'], ['photo', 'video']);
$post2 = new Post(2, 'Secondo post', new DateTime(), 7, 'Luigi M.', ['tutor', 'correzione'], ['video']);

$posts = [$post1, $post2];
?>

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

<?php
// Include the template to display user data
require_once __DIR__ . '/templates/posts_OOP.php';
?>

</html>