<!DOCUTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編_第11章課題</title>
</head>

<body>
  <p>
    <?php
    $vegitable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach ($vegitable as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>

</body>

</html>