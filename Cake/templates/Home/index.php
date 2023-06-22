<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section class="section">
        <div class="content" style="display: flex; color: black; justify-content: center; flex-direction:column">
            <h1>Bienvenue sur la page Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto sapiente sit distinctio nam magni possimus, natus doloremque voluptates facilis ipsa itaque commodi ratione deleniti veniam corrupti cum quidem et! </p>
            <?= $this->Html->link('/home/methode')?>
        </div>
        <div style='display:flex;'>
            <h3><?= $test ?></h3>
        </div>
    </section>
</body>
</html>