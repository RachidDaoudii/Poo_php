<?php

    // require 'class.php';
    require 'forms.php';
    //
    // $pre = new personne("daoudi","rachid",10,"agadir");

    // $presonne = new personne();
    
    // $presonne->setNom("Daoudi");
    // $presonne->setPreom("Younes");
    // $presonne->setAge(19);
    // $presonne->setVille("Agadir");

    // $pre->setNom("Daoudi");
    // $pre->setPreom("Younes");
    // $pre->setAge(12);
    // $pre->setVille("Agadir");

    // echo $pre->getNom();
    // echo $pre->getPrenom();
    // echo $pre->getAge();
    // echo $pre->getVille();
    
    // $pre->setPreom("Younes");
    // echo $pre->getNom();

    // echo $presonne->getNom();

    // echo $presonne->getNom();

    // echo $presonne->__toString();

    $form = new Form(array(
        'username' => 'Daoudi'
    ));
    // var_dump($form);
    // die();
    $form->input('username');
    $form->input('password');
    $form->submit();


    $form




?>