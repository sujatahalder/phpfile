<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //ACCESS MODIFIER//
     class Fruits{
        public $name = "Mango";
        protected $color = "Yellow";
        private $weight = "120gm";
        public static $numbers= "10";

        public function getWeight(){
            echo "Weight of the fruits is: " . $this->weight ."<br/>";

        }

        public function getName(){
             echo "The name of the fruit is:" .  $this->name  . "<br/>" ;
        }

     }
     class Banana extends Fruits {
        public function getColor(){
            echo "The of the fruit is:" . $this->color . "<br/>";
        }
    }
     $mango = new Fruits();
     //echo $mango->name;
     echo $mango->getName();
     echo $mango->getWeight();
     $banana = new Banana();
     echo $banana->getColor();
     //echo $banana->weight;
     echo "Total number is :" . Fruits::$numbers;

    ?>
</body>
</html>
