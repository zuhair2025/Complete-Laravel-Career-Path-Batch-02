<?php

namespace App\Controllers;

use App\DatabaseInterface;

Class RegistrationController
{
   public $errors = [];
   public $userData = [];
   public $data;
   public $message;
   public $fileStorage;
   public function __construct(DatabaseInterface $databaseInterface,$postData)
   {
      $this->data = $postData;
      $this->fileStorage = $databaseInterface;
   }

   public function register()
   {
      // Validate and Saniteize name Field
      if(empty($_POST['name']))
      {
         $this->errors['name'] = 'name field required';
      }else{
         $this->userData['name'] = sanitize($_POST['name']);
      }

      // Validate and Saniteize email Field
      if(empty($_POST['email']))
      {
         $this->errors['email'] = 'email field required';
      }else{
         $this->userData['email'] = sanitize($_POST['email']);
         if(!filter_var($this->userData['email'], FILTER_VALIDATE_EMAIL))
         {
            $this->errors['email'] = 'Please provide a valid email';
         }
      }

      // Validate and Saniteize password Field
      if(empty($_POST['password']))
      {
         $this->errors['password'] = 'password field required';
      }else{
         $this->userData['password'] = sanitize($_POST['password']);
      }

      // Store User Data
      $this->fileStorage->store($this->userData);
       
      return $this->message = 'Registration Successfull!';
   }

   public function getFormData()
   {
      return $this->data;
   }

}

