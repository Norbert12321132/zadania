<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Funkcje PHP</title>
</head>
<body>

<h1>Działanie funkcji</h1>

<?php

// 1. SUMA
function suma($a, $b)
{
    return $a + $b;
}

$a = 5;
$b = 7;

echo "<h2>1. SUMA</h2>";
echo $a . " + " . $b . " = " . suma($a, $b);


// 2. PODSTAWY
function podstawy($a, $b)
{
    echo $a . " - " . $b . " = " . ($a - $b);
    echo "<br>";

    echo $a . " * " . $b . " = " . ($a * $b);
    echo "<br>";

    if ($b != 0)
    {
        echo $a . " / " . $b . " = " . ($a / $b);
    }
    else
    {
        echo "Nie można dzielić przez 0";
    }
}

echo "<h2>2. PODSTAWY</h2>";
podstawy(10, 2);


// 3. KALKULATOR
function kalkulator($a, $b, $dzialanie)
{
    if ($dzialanie == "+")
    {
        return $a + $b;
    }
    elseif ($dzialanie == "-")
    {
        return $a - $b;
    }
    elseif ($dzialanie == "*")
    {
        return $a * $b;
    }
    elseif ($dzialanie == "/")
    {
        if ($b != 0)
        {
            return $a / $b;
        }
        else
        {
            return "Nie można dzielić przez 0";
        }
    }
}

$a = 8;
$b = 4;
$dzialanie = "*";

echo "<h2>3. KALKULATOR</h2>";
echo $a . " " . $dzialanie . " " . $b . " = ";
echo kalkulator($a, $b, $dzialanie);


// 4. MAKS
function maks($a, $b, $c)
{
    if ($a >= $b && $a >= $c)
    {
        return $a;
    }
    elseif ($b >= $a && $b >= $c)
    {
        return $b;
    }
    else
    {
        return $c;
    }
}

echo "<h2>4. MAKS</h2>";
echo "Liczby: 4, 15, 9<br>";
echo "Największa liczba: " . maks(4, 15, 9);


// 5. WZROST
function wzrost($wzrost)
{
    if ($wzrost < 150)
    {
        return "niski";
    }
    elseif ($wzrost > 180)
    {
        return "wysoki";
    }
    else
    {
        return "średni";
    }
}

$w = 175;

echo "<h2>5. WZROST</h2>";
echo "Wzrost: " . $w . " cm<br>";
echo "Kategoria: " . wzrost($w);


// 6. BMI
function bmi($wzrost, $waga)
{
    $metry = $wzrost / 100;

    $wynik = $waga / ($metry * $metry);

    if ($wynik < 18.5)
    {
        return round($wynik, 2) . " - za mało!";
    }
    elseif ($wynik > 25)
    {
        return round($wynik, 2) . " - za dużo!";
    }
    else
    {
        return round($wynik, 2) . " - OK!";
    }
}

echo "<h2>6. BMI</h2>";
echo "Wzrost: 180 cm<br>";
echo "Waga: 75 kg<br>";
echo "BMI: " . bmi(180, 75);


// 7. STARSZY
function starszy($data1, $data2)
{
    if ($data1 < $data2)
    {
        return "Osoba 1 jest starsza";
    }
    elseif ($data2 < $data1)
    {
        return "Osoba 2 jest starsza";
    }
    else
    {
        return "Osoby są w tym samym wieku";
    }
}

echo "<h2>7. STARSZY</h2>";
echo "Osoba 1: 2005-05-10<br>";
echo "Osoba 2: 2007-03-20<br>";
echo starszy("2005-05-10", "2007-03-20");


// 8. PRZESTĘPNY
function przestepny($rok)
{
    if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0)
    {
        return "Rok jest przestępny";
    }
    else
    {
        return "Rok nie jest przestępny";
    }
}

$rok = 2024;

echo "<h2>8. PRZESTĘPNY</h2>";
echo "Rok: " . $rok . "<br>";
echo przestepny($rok);


// 9. SIŁA HASŁA
function sila($haslo)
{
    $cyfra = preg_match("/[0-9]/", $haslo);
    $duza = preg_match("/[A-Z]/", $haslo);
    $mala = preg_match("/[a-z]/", $haslo);
    $specjalny = preg_match("/[^a-zA-Z0-9]/", $haslo);

    if (!$cyfra || !$duza || !$mala || !$specjalny)
    {
        return "Hasło słabe";
    }

    if (strlen($haslo) <= 4)
    {
        return "Hasło słabe";
    }
    elseif (strlen($haslo) < 8)
    {
        return "Hasło średnie";
    }
    else
    {
        return "Hasło mocne";
    }
}

$haslo = "Haslo123!";

echo "<h2>9. SIŁA HASŁA</h2>";
echo "Hasło: " . $haslo . "<br>";
echo sila($haslo);


// 10. TRÓJKĄT
function trojkat($a, $b, $c)
{
    if ($a + $b > $c &&
        $a + $c > $b &&
        $b + $c > $a)
    {
        return "Można utworzyć trójkąt";
    }
    else
    {
        return "Nie można utworzyć trójkąta";
    }
}

echo "<h2>10. TRÓJKĄT</h2>";
echo "Boki: 3, 4, 5<br>";
echo trojkat(3, 4, 5);

?>

</body>
</html>