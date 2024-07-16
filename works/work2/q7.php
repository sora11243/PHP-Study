<?php

// 各人の得点とその評価を表示するコードを書いてください。評価基準は以下とします:
// 90以上: "優"
// 80以上90未満: "良"
// 70以上80未満: "可"
// 70未満: "不可"

// 出力例 「johnの評価は良です」

$scores = array("John" => 85, "Jane" => 92, "Jim" => 78);
foreach ($scores as $key => $value) {
    if ($value >= 90) {
        echo "$key の評価は優です\n";
    } elseif ($value >= 80) {
        echo "$key の評価は良です\n";
    } elseif ($value >= 70) {
        echo "$key の評価は可です\n";
    } else echo "$key の評価は不可です\n";
}
