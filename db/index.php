<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "PHP OOP"; ?></title>
  </head>
  <body>
    <?php
    /*
    function -> methods & operations
    model real world
    inheritance -> object & more specific object
    Polymorphism -> object into method
    interface -> class wants to impliment a interface,
    */
    class Animal {
      protected $name;
      protected $favorite_food;
      protected $sound;
      protected $id;

      public static $number_of_animals = 0;
      //access static value
      //Animal::$number_of_animals

      const PI = "3.14159";
      //Animal::PI

      // encapsilation -> with the protected attribute
      function getName(){
        // refer to an attribute inside of a class "this->obj"
        return $this->name;
      }

      function __construct(){
          // sets values
          $this->id = rand(100, 1000000);
          echo $this->id . "has been assigned <br />";

          Animal::$number_of_animals++;
      }

      public function __destruct(){

          echo $this->name . " is being destroyed :()";
      }

      function __get($name){
          echo "Asked for ". $name."<br />";

          return $this->$name;

      }

      function __set($name, $value){

          switch($name){
              case "name" :
                    $this->name = $value;
                    break;

              case "favorite_food" :
                    $this->favorite_food = $value;
                    break;

              case "sound" :
                    $this->sound = $value;
                    break;
              default :
                echo $name . "Not Found";
          }
          echo "Set " . $name . " to " . $value . "<br />";
      }

      function run(){
        echo $this->name . " runs<br />";
      }

    }
class Dog extends Animal {
// overriding a function from the main classs
  function run(){
      echo $this->name . " runs like crazy<br />";
  }

}


$animal_one = new Animal();
$animal_one->name = "Spot";
$animal_one->favorite_food = "Meat";
$animal_one->sound = "Ruff";

echo $animal_one->name . " Says " . $animal_one->sound.
" give me some " . $animal_one->favorite_food. " my id is".
$animal_one->id . " Total animals =" . Animal::$number_of_animals .
"<br /><br />";

echo "Favorite Number " . Animal::PI . "<br />";

     ?>
  </body>
</html>
