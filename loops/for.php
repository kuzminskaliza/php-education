<?php

for ($x = 0; $x <= 10; $x++) {
    echo $x;
}

for ($x = 0; $x <= 100; $x += 10) {
    echo $x;
}


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo $x;
}


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo $x;
}