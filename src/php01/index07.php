<?php
$people = [
  [
    "name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

foreach ($people as $person) {
  echo $person["name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")";
  echo '<br />';
}