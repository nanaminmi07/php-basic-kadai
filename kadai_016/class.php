<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題016</title>
</head>

<body>
    <p>
        <?php
        // 食品のクラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;  
        
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_name() {
                echo $this->name . '<br>';
            }

            public function get_price() {
                return $this->price;
            }
        }

        // 食品クラスのインスタンスを作成し、メソッドを呼び出す
        $potato = new Food('potato', 250);
        $potato->show_name();

        // インスタンスの各プロパティの値を出力する
        echo 'Food Price: ' . $potato->get_price() . '<br>';
        print_r($potato);

        // 動物クラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;  

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }

            public function get_height() {
                return $this->height;
            }
        }

        // 動物クラスのインスタンスを作成し、メソッドを呼び出す
        $dog = new Animal('dog', 60, 5000);
        $dog->show_height();

        // インスタンスの各プロパティの値を出力する
        echo 'Animal Height: ' . $dog->get_height() . '<br>';
        print_r($dog);
        ?>
    </p>
</body>
</html>