<?php


class HUMAIN
{
    private $secret = "";

    public $tail = 175;
    public $name = "";


    public function getSecret()
    {
        return $this->secret;
    }
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }


    public function __construct($familyName)
    {
        $this->name = $familyName;
        echo "Je suis né.e \n";
    }

    public function __destruct()
    {
        echo "Je suis mort.e \n";
    }


    function walk()
    {
        echo "Je marche";
    }

    function mySize()
    {
        return $this->tail + 1;
    }
}

class Homme extends HUMAIN
{

}

class Femme extends HUMAIN
{

}


$marcelline = new HUMAIN("chat");
$constance = new HUMAIN("chien");

echo $marcelline->mySize()."\n";
echo $constance->mySize()."\n";

echo $marcelline->name."\n";
echo $constance->name."\n";

$marcelline->setSecret("J'aime les chats \n");
$constance->setSecret("J'aime les chiens \n");

echo $marcelline->getSecret();
echo $constance->getSecret();

unset($constance);