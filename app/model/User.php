<?php 

  class User{

    // Attributes 
    private $id;
    private $name;
    private $email;
    private $password;


    // Method setter 
    public function setEmail($email){
      $this->email = $email;
    }

    public function setName($name){
      $this->name = $name;

    }

    public function setPassword($password){
      $this->password = $password;
      
    }
    public function validateLogin(){
      /*
      * 1ºConection database. 
      * 2ª Select the user,  using email column.
      * 3ª Validate password.
      * 4ª If all data is valid create the session
      * 5ª In case of error, it returns to the initial screen, with an error message.
      */
    }

    // Method getter 
     public function getName(){
       return $this-> name;
     }

     public function getEmail(){
      return $this-> email;
    }

    public function getPassword(){
      return $this-> password;
    }



  }