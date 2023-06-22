<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div>
                <ul>
                    <a href="/home/index">Home</a>
                    <a href="/home/methode">Methode</a>
                </ul>
            </div>
        </nav>
        <!-- <?= $this->Html->image('marvin.jpg')?> -->
    </header>
    <main class="main">
        <div class="container">
            <?= $this->fetch('content') ?>
            <?= $this->Html->css('layout.css')?>
        </div>
    </main>
</body>
</html>