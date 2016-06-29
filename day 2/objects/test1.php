<?php
    include_once '../objects/User.php';
    include_once '../objects/UserEmail.php';
    
    $user1 = new User;
    $user1 -> setUsername('paperino');
    
    // var_dump($user1 -> username);
    // echo '</br>';
    
   // var_dump($user1 -> test('pippo'));
    echo '</br>';
    var_dump($user1 -> getUsername());
    //var_dump($user1 -> username);
    
    echo '</br>';
    $user2 = new UserEmail;
    //var_dump($user2);
    
    echo '</br>';
    $user2 -> setUsername('Sissi');
    var_dump($user2 -> getUsername());