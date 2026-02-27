<!DOCTYPE html>
<html>
    <body>


        <?php
// parent class
class fruit {
    public $name;
    public $color;

    public function __construct($name, $color) 
    {
        $this -> name =$name;
        $this ->color=$color; 
    }
     public function intro () 
     {
        echo "The fruit is {$this->name} and its color is {$this->color} .<br>"; 
     }
}
// strawberry is inherited from fruit
class strawberry extends fruit
 {
    public function message ()
    {
        echo " am i a fruit or berry";
    }
}
  $strawberry = new strawberry("strawberry", "red");
  $strawberry -> intro();
  $strawberry ->message();

  
    ?>
    </body>
</html>