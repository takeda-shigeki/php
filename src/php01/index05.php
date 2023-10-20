<?php

$num = 0;
do {
  echo 'num = ' . $num . '<br />';
  $num++;
} while ($num <= 2);

$round = "●";
for ($i = 1; $i <= 25; $i++) {
    if ($i%5 == 0) {
        echo $round . '<br />';
    }
    else {
        echo $round;
    }
}