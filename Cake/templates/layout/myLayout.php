<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<header>
    <nav class="navbar">
        <div>
            <ul>
                <a href="/home/index">Home</a>
                <a href="/home/methode">Methode</a>
                <a href="/produits">Produits</a>
            </ul>
        </div>
    </nav>
</header>
<body>
    <main class="main">
        <div class="container">
            <?= $this->fetch('content') ?>
            <?= $this->Html->css('layout.css')?>
        </div>
    </main>
</body>
<footer>
    <ul>
        <li>© 2023 WorkCake, Inc.</li>
        <li>toto</li>
        <li>tata</li>
        <li>titi</li>
    </ul>
</footer>
</html>