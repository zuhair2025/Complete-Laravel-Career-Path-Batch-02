<?php

$errors = [];
$name = '';
$email = '';
$password = '';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    // Validate and Sanitize Full

    if(empty($_POST['name'])){
        $errors['name'] = 'name field required';
    }else{
        $name = sanitize($_POST['name']);
    }
}