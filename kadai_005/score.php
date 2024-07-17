<!DOCUTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHPの基礎編_第5章課題</title>
</head>

<body>
  <p>
    <?php

    // 生徒10人bンのデータの代入
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計点を計算する
    $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    // 平均点を計算する
    $average = $sum / 10;
    // 平均点を計算し出力する
    echo $average;
    ?>
  </p>
</body>

</html>
