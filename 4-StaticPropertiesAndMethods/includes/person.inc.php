<?php

  class Person {

    public $name;
    public $eyeColor;
    public $age;

    static $drinkingAge = 18;

    public function __construct($name, $eyeColor, $age) {
      $this->name = $name;
      $this->eyeColor = $eyeColor;
      $this->age = $age;
    }
  
    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      return $this->name;
    }

    public static function setDrinkingAge($newDA) {
      self::$drinkingAge = $newDA;
    }

    public function getDA() {
      return self::$drinkingAge;
    }

  }

?>