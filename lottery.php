<?php

$community_names = [
    'Fukuoka.php',
    'Fukuoka.pm',
    'Fukuoka.rb',
    'PyFukuoka',
    'FukuokaJS',
    'fukuoka.kt',
    'Fukuoka.go',
    'Fukuoka.NET（ふくてん）',
    'fukuoka.ex（福岡Elixirコミュニティ）',
    'Scala福岡',
    'R勉強会＠福岡(fukuoka.R)',
    'PMFukuoka（福岡プロジェクトマネジメント勉強会）',
    'Javaコミュ＠福岡',
    'HAKATA.swift',
    'PyData.Fukuoka',
    'プログラマのための数学勉強会@福岡',
];
shuffle($community_names);

$person_names = [
    'nagachika',
    'localdisk',
    'tosite（まおちゃ）',
    'Huyuumi',
    'eri',
];
shuffle($person_names);

$orders = [];
foreach($community_names as $key => $community_name) {
    if ($key % 3 === 0 && $key < count($person_names) * 3) {
        $orders[] = $person_names[floor($key / 3)];
    }
    $orders[] = $community_name;
}

foreach($orders as $key => $order) {
    if ($key % 4 === 0 && $key < count($person_names) * 3) {
        echo '一般枠LT : ' . $orders[$key] . PHP_EOL;
    } else {
        echo '主催枠LT : ' . $orders[$key] . PHP_EOL;
    }

}
