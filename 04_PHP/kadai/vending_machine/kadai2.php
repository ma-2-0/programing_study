<?php

$drinks = [
    1 => ["name" => "お茶",     "price" => 100],
    2 => ["name" => "コーラ",   "price" => 120],
    3 => ["name" => "コーヒー", "price" => 150],
    4 => ["name" => "ビール",   "price" => 230],
];

echo "お金を入れてください>";
$inputMoney = trim(fgets(STDIN));

$buyDrinkNameList = [];
$totalCost = 0;
while(true) {
  echo PHP_EOL;
  echo "購入したい飲み物のNo.を入力してください".PHP_EOL;
  foreach($drinks as $idx => $drink) {
     echo $idx .":".$drink["name"] . " ". $drink["price"] . "円".PHP_EOL;
  }
  echo "0: 精算";
  echo ">";
  $inputNum = trim(fgets(STDIN));

  if ($inputNum == 0) {
      break;
  } else if (!isset($drinks[$inputNum])) {
      echo "指定されたNo.の飲み物は現在販売していません".PHP_EOL;
      continue;
  }

  $selectedDrink = $drinks[$inputNum];
  if ($selectedDrink["price"] + $totalCost > $inputMoney) {
      echo $selectedDrink["name"] . "を買うにはあと" . $selectedDrink["price"] + $totalCost - $inputMoney . "円足りません" .PHP_EOL;
      continue;
  }

  $totalCost += $selectedDrink["price"];
  $buyDrinkNameList[] = $selectedDrink["name"];
}

if (empty($buyDrinkNameList)) {
    echo "なにも購入しませんでした。お釣りは" . $inputMoney . "円です。";
} else {
    echo implode("と", $buyDrinkNameList) . "を購入しました。" . PHP_EOL;
    echo "お釣りは" . $inputMoney - $totalCost . "円です".PHP_EOL;
}
