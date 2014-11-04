<?php

function __autoload($classname)
{
    include dirname(__FILE__) . '/class/' . $classname . '.php';
}

$orchestra = new Orchestra();
$composition = new Composition(
    'The prayer',
    ['cello', 'violin', 'dulcimer', 'handBells', 'domra', 'guitar', 'flute', 'trombone']
);

$celloPerson     = new Musician(['Ivan', 'Ivanov', 4], 'cello');
$violinPerson    = new Musician(['Ivan', 'Ivanov', 4], 'violin');
$dulcimerPerson  = new Musician(['Ivan', 'Ivanov', 4], 'dulcimer');
$handBellsPerson = new Musician(['Ivan', 'Ivanov', 4], 'handBells');
$domraPerson     = new Musician(['Ivan', 'Ivanov', 4], 'domra');
$guitarPerson    = new Musician(['Ivan', 'Ivanov', 4], 'guitar');
$flutePerson     = new Musician(['Ivan', 'Ivanov', 4], 'flute');
$trombonePerson  = new Musician(['Ivan', 'Ivanov', 4], 'trombone');

$orchestra->addUnit($celloPerson);
$orchestra->addUnit($violinPerson);
$orchestra->addUnit($dulcimerPerson);
$orchestra->addUnit($handBellsPerson);
$orchestra->addUnit($domraPerson);
$orchestra->addUnit($guitarPerson);
$orchestra->addUnit($flutePerson);
$orchestra->addUnit($trombonePerson);

$orchestra->playComposition($composition);