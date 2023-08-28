<!DOCTYPE html>
<html lang='ja'>

    <head>
        <meta charset='UTF-8'>
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php
            class Food {
                private $name;
                private $price;

                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                public function show_price() {
                    echo $this->price . '<br>';
                }
            }

            class Animal {
                private $name;
                private $height;
                private $weight;

                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                public function show_height() {
                    echo $this->height . '<br>';
                }
            }

            $carrot = new Food('にんじん', 100);
            $cat = new Animal('猫', 50, 2500);

            print_r($carrot);
            echo '<br>';
            print_r($cat);

            $carrot->show_price();
            $cat->show_height();

            ?>
        </p>
    </body>
</html>