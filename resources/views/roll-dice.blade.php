<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rolls Dice</title>
    </head>
    <body>
        <h1>Hey You rolled some die</h1>
        <h2>lets see what you guessed</h2>
        <h3>Looks like a <?=$guess?></h3>
        <?php if ($guess == $number): ?>
            <h4>You rolled the lucky magic number</h4>
            <?php else: ?>
                <h4>No dice Friendo</h4>
        <?php endif; ?>
    </body>
</html>
