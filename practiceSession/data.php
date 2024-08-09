<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>game</title>
</head>
<body>
<style>
    .error {
        border: 2px solid red;
    }
    .success {
        border: 2px solid green;
    }
</style>

<?php
$formShow = true;
$name = 'Player';
$health = 100;
$damage = 1;
$crit = '5';
$chance = '10';
$nameClass = $healthClass = $damageClass = $critClass = $chanceClass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameClass = 'error';
    } else {
        $name = htmlspecialchars($_POST['name']);
        $nameClass = 'success';
    }
    if (empty($_POST['health'])) {
        $healthClass = 'error';
    } else {
        $health = htmlspecialchars($_POST['health']);
        $healthClass = 'success';
    }
    if (empty($_POST['damage'])) {
        $damageClass = 'error';
    } else {
        $damage = htmlspecialchars($_POST['damage']);
        $damageClass = 'success';
    }
    if (empty($_POST['crit'])) {
        $critClass = 'error';
    } else {
        $crit = htmlspecialchars($_POST['crit']);
        $critClass = 'success';
    }
    if (empty($_POST['chance'])) {
        $chanceClass = 'error';
    } else {
        $chance = htmlspecialchars($_POST['chance']);
        $chanceClass = 'success';
    }
    $arr = [$nameClass, $healthClass, $damageClass, $critClass, $chanceClass];
    if (!in_array('error', $arr)) {
        $params = 'name=' . $name . '&health=' . $health . '&damage=' .$damage . '&crit=' . $crit . '&chance=' . $chance;
        header("Location: http://php-education.local.com/practiceSession/game.php?$params");
    }
}
?>
<?php if ($formShow) : ?>
<div>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
       <label for="name">Nickname:</label><br>
       <input type="text" id="name" name="name" class="<?php echo $nameClass; ?>" value="<?php echo htmlspecialchars($name); ?>"><br><br>
       <label for="health">HP:</label><br>
       <input type="text" id="health" name="health"  class="<?php echo $healthClass; ?>" value="<?php echo htmlspecialchars($health); ?>"><br><br>
       <label for="damage">Damage:</label><br>
       <input type="text" id="damage" name="damage" class="<?php echo $damageClass; ?>" value="<?php echo htmlspecialchars($damage); ?>"><br><br>
       <label for="crit">Crit:</label><br>
       <input type="text" id="crit" name="crit" class="<?php echo $critClass?>" value="<?php echo htmlspecialchars($crit); ?>"><br><br>
       <label for="chance">Crit:</label><br>
       <input type="text" id="chance" name="chance" class="<?php echo $chanceClass?>" value="<?php echo htmlspecialchars($chance); ?>"><br><br>
       <input type="submit" name="submit" value="Почати гру">
   </form>
</div>

<?php else: ?>
<?php
    include 'game.php';
    ?>
<?php endif; ?>
</body>
</html>


