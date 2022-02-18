<?php

$drinks = [
    1 => ["name" => "お茶",     "price" => 100],
    2 => ["name" => "コーラ",   "price" => 120],
    3 => ["name" => "コーヒー", "price" => 150],
    4 => ["name" => "ビール",   "price" => 230],
];

echo "お金を入れてください>";
$inputMoney = trim(fgets(STDIN));

echo "購入したい飲み物のNo.を入力してください".PHP_EOL;
foreach($drinks as $idx => $drink) {
   echo $idx .":".$drink["name"] . " ". $drink["price"] . "円".PHP_EOL;
}
echo ">";
$inputNum = trim(fgets(STDIN));

if (!isset($drinks[$inputNum])) {
    echo "指定されたNo.の飲み物は現在販売していません".PHP_EOL;
    return;
}

$selectedDrink = $drinks[$inputNum];
if ($selectedDrink["price"] > $inputMoney) {
    echo $selectedDrink["name"] . "を買うにはあと" . $selectedDrink["price"] - $inputMoney . "円足りません" .PHP_EOL;
    return;
}

echo $selectedDrink["name"] . "を購入しました。" . PHP_EOL;
echo "お釣りは" . $inputMoney - $selectedDrink["price"] . "円です".PHP_EOL;
