<?php
   
class User {

   public $id;
   public $name;
   public $surname;
   public $email;
   public $password;
   public $token;

   public function getFullName($user) {
      return $user->name . " " . $user->surname;
   }

   public function generateToken() {
      return bin2hex(random_bytes(50));
   }

   public function generatePassword($password) {
      return password_hash($password, PASSWORD_DEFAULT);
   }

}

interface UserDAOInterface {

   public function buildUser($data);
   public function create(User $user);
   
}
