<?php
// exo 1
$exo1age = 29;

if ($exo1age >= 18) {
    echo "<p> Vous êtes majeur <br> </p>";
} else {
    echo "<p> Vous êtes mineur <br> </p>";
}

// exo 2

$isEasy = true;

if ($isEasy) {
    echo "<p>C'est facile <br></p>";
} else {
    echo "<p>C'est  difficile  <br></p>";
}

echo $isEasy ? "C'est facile <br>" : "C'est  difficile  <br>";

// exo 3
$gender = "Femme";
$age = 29;

if ($gender === "Femme" && $age >= 18) {
    echo "<p>Vous êtes une femme et vous êtes majeure.</p>";
} elseif ($gender === "Femme" && $age < 18) {
    echo "<p>Vous êtes une femme et vous êtes mineure.</p>";
} elseif ($gender === "Homme" && $age >= 18) {
    echo "<p>Vous êtes un homme et vous êtes majeur.</p>";
} elseif ($gender === "Homme" && $age < 18) {
    echo "<p>Vous êtes un homme et vous êtes mineur.</p>";
} else {
    echo "<p>Genre ou âge non reconnu.</p>";
}


// exo 4
$exo4magnitude = 4;

switch ($exo4magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.<br>";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>";
        break;
    case 3:
        echo "	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>";
        break;
        case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>";
        break;
        case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>";
        break;
    case 8:
        echo "	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>";
        break;
    case 9:
        echo "	Séisme capable de tout détruire sur une très vaste zone.<br>";
}

// exo 5
$exo5gender = "Femme";

if ($exo5gender != "Homme") {
    echo "<p>C'est une développeuse !!</p>";
} else {
    echo "<p>C'est un developpeur !!</p>";
}

// exo 6
$exo6age = 29;

if ($exo6age >= 18) {
    echo "<p>Tu es majeur</p>";
} else {
    echo "<p>Tu es mineur</p>";
}

// exo 7 

$exo7boolean = true ;

if ($exo7boolean == false ) {
    echo "<p>Ce n'est pas bon</p>";
} else {
    echo "<p>C'est ok</p>";
}


// exo 8
$isOk = true;

if ($isOk) {
    echo "C'est OK";
} else {
    echo "Ce n'est pas bon";
}

