<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>game</title>
    <link href="/practiceSession/style.css?v=1.0" rel="stylesheet">
</head>
<body>
<?php
$user = $pc = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (empty($_GET)) {
        header("Location: http://php-education.local.com/practiceSession/data.php");
    }
    $user['name'] = $_GET['name'];
    $user['health'] = $_GET['health'];
    $user['damage'] = $_GET['damage'];
    $user['crit'] = $_GET['crit'];
    $user['chance'] = $_GET['chance'];
    $pc = [
        'name' => 'PC',
        'health' => 100,
        'damage' => 1,
        'crit' => '5',
        'chance' => '10',
    ];
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user['name'] = $_POST['name'];
    $user['health'] = $_POST['health'];
    $user['damage'] = $_POST['damage'];
    $user['crit'] = $_POST['crit'];
    $user['chance'] = $_POST['chance'];
    $user['action'] = $_POST['action'];

    $pc['name'] = $_POST['pc-name'];
    $pc['health'] = $_POST['pc-health'];
    $pc['damage'] = $_POST['pc-damage'];
    $pc['crit'] = $_POST['pc-crit'];
    $pc['chance'] = $_POST['pc-chance'];
    $battleUserLog = $_POST['battle-user-log'];
    $battlePcLog = $_POST['battle-pc-log'];

}


switch ($user['action']) {
    case 'Shot':
        $damage = $user['damage'];
        if (rand(1, 100) <= $user['crit']) {
            $damage += 2;
        }
        if (rand(1, 100) <= $user['chance']) {
            $damage -= 2;
        }
        $pc['health'] -= max(0, $damage);
        $battleUserLog .= 'User set ' . $damage . ' damage!' . '<br>';
        break;
    case 'Block':
        $user['chance'] += 2;
        $battleUserLog .= 'User buff block +2!' . '<br>';
        break;
    case 'Buff-damage':
        $user['damage'] += 2;
        $battleUserLog .= 'User buff damage +2!' . '<br>';
        break;
    case 'Buff-crit':
        $user['crit'] += 2;
        $battleUserLog .= 'User buff crit +2!' . '<br>';
        break;

}

if ($pc['health'] <= 0) {
    $gameOver = true;
    $winner = $user['name'];
}
if (!$gameOver) {
    $pcButton = ['Shot', 'Block', 'Buff-damage', 'Buff-crit'];
    $pcAction = $pcButton[array_rand($pcButton)];
    switch ($pcAction) {
        case 'Shot':
            $damage = $pc['damage'];
            if (rand(1, 100) <= $pc['crit']) {
                $damage += 2;
            }
            if (rand(1, 100) <= $pc['chance']) {
                $damage -= 2;
            }
            $user['health'] -= max(0, $damage);
            $battlePcLog .= 'Pc set ' . $damage . ' damage!' . '<br>';
            break;
        case 'Block':
            $pc['chance'] += 2;
            $battlePcLog .= 'Pc buff block +2!' . '<br>';
            break;
        case 'Buff-damage':
            $pc['damage'] += 2;
            $battlePcLog .= 'Pc buff damage +2!' . '<br>';
            break;
        case 'Buff-crit':
            $pc['crit'] += 2;
            $battlePcLog .= 'Pc buff crit +2!' . '<br>';
            break;
    }
    if ($user['health'] <= 0) {
        $gameOver = true;
        $winner = 'Pc';
    }
}


?>
<div class="center">
    <?php if ($gameOver): ?>
        <h3>Game over! Winner: <?= $winner; ?></h3>
        <a href="http://php-education.local.com/practiceSession/data.php" class="button">Почати нову гру</a>
    <?php else: ?>
    <h2>Гра почалась!</h2>
    <div class="close">
        <p>Nick: <?php echo $user['name']; ?></p>
        <p>HP: <?php echo $user['health']; ?></p>
        <p>Current Dmg: <?php echo $user['damage']; ?></p>
        <p>Crit chance: <?php echo $user['crit']; ?></p>
        <p>Block chance: <?php echo $user['chance']; ?></p>
    </div>
    <div class="close">
        <p>Nick: <?php echo $pc['name']; ?></p>
        <p>HP: <?php echo $pc['health']; ?></p>
        <p>Current Dmg: <?php echo $pc['damage']; ?></p>
        <p>Crit chance: <?php echo $pc['crit']; ?></p>
        <p>Block chance: <?php echo $pc['chance']; ?></p>
    </div>
    <form action="game.php" method="post">
        <button type="submit" name="action" value="Shot">Shot</button>
        <button type="submit" name="action" value="Block">Block</button>
        <button type="submit" name="action" value="Buff-damage">Buff +2 damage</button>
        <button type="submit" name="action" value="Buff-crit">Buff +2 crit</button>

        <input type="hidden" name="name" value="<?= $user['name'] ?>">
        <input type="hidden" name="health" value="<?= $user['health'] ?>">
        <input type="hidden" name="damage" value="<?= $user['damage'] ?>">
        <input type="hidden" name="crit" value="<?= $user['crit'] ?>">
        <input type="hidden" name="chance" value="<?= $user['chance'] ?>">

        <input type="hidden" name="pc-name" value="<?= $pc['name'] ?>">
        <input type="hidden" name="pc-health" value="<?= $pc['health'] ?>">
        <input type="hidden" name="pc-damage" value="<?= $pc['damage'] ?>">
        <input type="hidden" name="pc-crit" value="<?= $pc['crit'] ?>">
        <input type="hidden" name="pc-chance" value="<?= $pc['chance'] ?>">

        <input type="hidden" name="battle-user-log" value="<?= $battleUserLog ?>">
        <input type="hidden" name="battle-pc-log" value="<?= $battlePcLog ?>">
    </form>
</div>
<div class="center">
    <p class="close">Game started: <?= $battleUserLog ?></p>
    <p class="close">Game started: <?= $battlePcLog ?></p>
</div>
<?php endif; ?>
</body>
</html>

