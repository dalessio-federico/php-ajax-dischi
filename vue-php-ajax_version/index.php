<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi Vue-php-Ajax</title>
</head>
<body>
    <div class="wrapper" id="root">
        <header>
            <?php include __DIR__."/templates\header.php"; ?>
        </header>

        <main>
            <?php include __DIR__."/templates\main.php"; ?>
        </main>
    </div>
    <script src="js/master.js"></script>
</body>
</html>