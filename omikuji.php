<?php

$num = rand(1, 5);

if ($num == 1) {
    $result = '大吉';
} elseif ($num == 2) {
    $result = '中吉';
} elseif ($num == 3) {
    $result = '小吉';
} elseif ($num == 4) {
    $result = '凶！';
} elseif ($num == 5) {
    $result = '大凶xおおxおxおxおxおx！';
}
echo $result;
