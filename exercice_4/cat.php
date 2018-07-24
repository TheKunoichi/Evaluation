<?php

class Cat{
    public $firstName = "";
    public $age = "";
    public $color = ""; 
    public $gender = "";
    public $race = "";

    /**
     * Get the value of firstName
     */ 
    public function getFirstName(){
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName){
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(){
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age){
        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(){
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color){
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender(){
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender(string $gender){
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of race
     */ 
    public function getRace(){
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace(string $race){
        $this->race = $race;

        return $this;
    }

    public static function fromArray(array $definition){

        $cat = new Cat();
        $cat->setFirstName((string)$definition ['firstname'] ?? '')
            ->setAge((int)$definition ['age'] ?? '')
            ->setColor((string)$definition ['color'] ?? '')
            ->setGender((string)$definition ['gender'] ?? '')
            ->setRace((string)$definition ['race'] ?? '');

        return $cat;
    }
    
    /**
    * @return array
    */
    public function getInfo(){
        return [
            'firstname' =>  $this->getFirstName(),
            'age' =>  $this->getAge(),
            'color' =>  $this->getColor(),
            'gender' =>  $this->getGender(),
            'race' =>  $this->getRace(),
        ];
    }
}






