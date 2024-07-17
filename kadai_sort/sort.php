<!DOCUTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編_sort課題</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($order){
      $nums = [15, 4, 18, 23, 10 ];
      if ($order == true){
        echo '昇順にソートします。<br>';
        sort($nums);
      }else {
        echo '降順にソートします。<br>';
        rsort($nums);
      }
        foreach($nums as $value){
          echo $value . '<br>';
        }
    }
    sort_2way(true).'<br>';
    sort_2way(false);
    ?>
  </p>

</body>

</html>