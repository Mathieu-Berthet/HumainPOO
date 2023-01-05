<?php


trait Bipede {
    public function courrir()
    {
        echo "Je cours\n";
    }
}

interface Mammifere
{
    public function Pilosite();
}

abstract class HUMAIN implements Mammifere
{
    use Bipede;
    private $secret = "";

    public $tail = 175;
    public $name = "";
    public $force = 1;

    public static $population = 0;

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
        self::$population += 1;
        echo "Je suis né.e \n";
    }

    public function __destruct()
    {
        self::$population -= 1;
        echo "Je suis mort.e \n";
    }


    public function walk()
    {
        echo "Je marche\n";
    }

    public function mySize()
    {
        return $this->tail + 1;
    }

    public function Pilosite()
    {
        echo "J'ai du poil\n";
    }
}

class Homme extends HUMAIN
{
    public $force = 2;
}

class Femme extends HUMAIN
{
    public function faireEnfant()
    {
        echo "Oui, je peux enfanter\n";
    }


    public function Pilosite()
    {
        echo "J'ai moins de poil que homme\n";
    }
}

echo "Population : ".HUMAIN::$population."\n";
$marcelline = new Femme("chat");
echo "Population : ".HUMAIN::$population."\n";
$constance = new Femme("chien");
echo "Population : ".HUMAIN::$population."\n";

$adam = new Homme("Renard");
echo "Population : ".HUMAIN::$population."\n";

$adam->walk();
$marcelline->courrir();


echo "Marcelline mesure : ".$marcelline->mySize()."cm \n";
echo "Constance mesure : ".$constance->mySize()."cm \n";

echo "Le nom de Marcelline est : ".$marcelline->name."\n";
echo "Le nom de constance est : ".$constance->name."\n";

$marcelline->setSecret("J'aime les chats \n");
$constance->setSecret("J'aime les chiens \n");

echo "Le secret de Marcelline est : ".$marcelline->getSecret();
echo "Me secret de Constance est : ".$constance->getSecret();

echo "La force de Marcelline est : ".$marcelline->force."\n";
echo "La force de Adam est : ".$adam->force."\n";

$adam->Pilosite();
$marcelline->Pilosite();

$marcelline->faireEnfant();
//$adam->faireEnfant();
echo "Population : ".HUMAIN::$population."\n";
unset($constance);
echo "Population : ".HUMAIN::$population."\n";

