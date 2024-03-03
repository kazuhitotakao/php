<?php
$array = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];

foreach ($array as $vals) {
    echo $vals[0] . "(" . $vals[1] . "歳" . $vals[2] . ")" . "<br/>";
}
