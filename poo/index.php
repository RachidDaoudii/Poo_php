<?php

    require 'class.php';
    //
    $pre = new personne();
    $presonne = new personne("daoudi","rachid",20,"agadir");

    // $pre->setNom("Daoudi");
    // $pre->setPreom("Younes");
    // $pre->setAge(12);
    // $pre->setVille("Agadir");

    // echo $pre->getNom();
    // echo $pre->getPrenom();
    // echo $pre->getAge();
    // echo $pre->getVille();


    $presonne->setNom("Daoudi");
    $presonne->setPreom("Younes");
    $presonne->setAge(12);
    $presonne->setVille("Agadir");
    echo $presonne->getNom();

    // $pre->setPreom("Younes");
    // echo $pre->getNom();

    // echo $pre->__toString();

    // echo $pre->age();

?>