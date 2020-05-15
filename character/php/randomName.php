<?php

function getSurname()
{
    $surnames = array(
        "Copperpots",
        "Mithril-born",
        "Silverbeard",
        "Ironhelm",
        "Ashenforge",
        "Birchstone",
        "Elderbeard",
        "Oakenshield",
        "Yewhammer",
        "Dûnhark",
        "Firebeard",
        "Gnarlbeard",
        "Grimsleeper",
        "Forgeworn",
        "Stormhammer",
        "Frostbeard",
        "Hammerdasher",
        "Goldbrewer",
        "Stormpeak",
        "Hammerkeeper",
        "Blackhammer",
        "Blackbanner",
        "Longbeard"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames - 1) );
    
    return $surnames[$randomName];
}


function getRandomSex()
{
    $sex = "";

    $sexIdentity = rand (0, 1);

    if($sexIdentity == 0)
    {
        $sex = 'Female';
    }
    else
    {
        $sex = 'Male';
    }

    return $sex;

}

function getCharacterName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Haria",
        "Dimgrima",
        "Dwingari",
        "Thrgoli",
        "Morala",
        "Bofgrima",
        "Bolundi",
        "Rungini",
        "Mormina",
        "Chaldria",
        "Farona",
        "Barrimi",
        "Groona",
        "Calgari",
        "Belunni",
        "Gombari",
        "Belrundi",
        "Dwzadi",
        "Nordria",
        "Fimgini",
        "Farrundi",
        "Rungari",
        "Dortria",
        "Thinala",
        "Dwingrima",
        "Gomala"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {

        $maleNames = array(
        "Gilol",
        "Gindli",
        "Dariol",
        "Dolvor",
        "Rundur",
        "Dolan",
        "Gilin",
        "Aigran",
        "Mandor",
        "Dalgon",
        "Ginli",
        "Thrond",
        "Barrim",
        "Thgrim",
        "Druum",
        "Dalmin",
        "Garain",
        "Bulbur",
        "Dwinund",
        "Gilgin",
        "Fimlin",
        "Storum",
        "Belkon",
        "Ketkon"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $maleNames[$randomName];
    }
}


function getRandomName ($sex)
{
    $name = "";
    $theSex;

    if($sex == 'Male')
    {
        $theSex = 'Male';
    }
    else if($sex == 'Female')
    {
        $theSex = 'Female';
    }
    else
    {
        $theSex = getRandomSex();

    }

    $name = getCharacterName ($theSex);

    return $name;
}




?>