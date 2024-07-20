<!DOCUTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編_sort課題_第16章課題</title>
</head>

<body>
  <p>
    <?php
    // Foodのプロパティの適宜
    class Food {
      private $name;
      private $price;

      // コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      // priceプロパティの値を出力するメソッドの定義
      public function show_price() {
        echo $this->price . '<br>';
      }
    }
    // Animalのプロパティの定義
    class Animal {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      // heightプロパティの値を出力するメソッドの定義
      public function show_height() {
        echo $this->height. '<br>';
      }
    }

    // インスタンス化
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>