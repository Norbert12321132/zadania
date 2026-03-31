<?php
function kolor($k) {
    return preg_match('/^#[0-9A-Fa-f]{6}$/', $k);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Zadania PHP</title>
</head>
<body>

<h3>1. Logowanie</h3>
<form method="post">
<input type="hidden" name="z" value="1">
Login: <input type="text" name="a"><br>
Hasło: <input type="password" name="b"><br>
<input type="checkbox" name="c"> zapamiętaj mnie<br>
<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==1){
    echo "<hr>";
    echo "login: ".$_POST['a']."<br>";
    echo "haslo sha1: ".sha1($_POST['b'])."<br>";

    if(isset($_POST['c'])){
        echo "checkbox zaznaczony";
    } else {
        echo "checkbox nie zaznaczony";
    }
}
?>

<hr>

<h3>2. Komentarz</h3>
<form method="post">
<input type="hidden" name="z" value="2">
nick: <input type="text" name="a"><br>
komentarz:<br>
<textarea name="b"></textarea><br>
<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==2){
    echo "<hr>";
    echo "<p>nick: ".$_POST['a']."</p>";
    echo "<p>komentarz html: ".$_POST['b']."</p>";
    echo "<p>komentarz tekst: ".htmlspecialchars($_POST['b'])."</p>";
}
?>

<hr>

<h3>3. Ankieta</h3>
<form method="post">
<input type="hidden" name="z" value="3">

<select name="a">
<option>1</option>
<option>2</option>
<option>3</option>
</select><br><br>

<input type="radio" name="b" value="A">A<br>
<input type="radio" name="b" value="B">B<br>
<input type="radio" name="b" value="C">C<br><br>

<input type="checkbox" name="c[]" value="X">X<br>
<input type="checkbox" name="c[]" value="Y">Y<br>
<input type="checkbox" name="c[]" value="Z">Z<br><br>

<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==3){
    echo "<hr>";
    echo "p1: ".$_POST['a']."<br>";
    echo "p2: ".$_POST['b']."<br>";
    echo "p3: ";

    if(isset($_POST['c'])){
        foreach($_POST['c'] as $x){
            echo $x." ";
        }
    }
}
?>

<hr>

<h3>4. Kolory</h3>
<form method="post">
<input type="hidden" name="z" value="4">
tlo: <input type="text" name="a"><br>
tekst: <input type="text" name="b"><br>
<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==4){
    echo "<hr>";
    $a = $_POST['a'];
    $b = $_POST['b'];

    if(kolor($a) && kolor($b)){
        echo "<p style='width:50%;height:50%;margin:50px auto;border:2px dashed red;background:$a;color:$b;'>
        Jan Kowalski
        </p>";
    } else {
        echo "zle kolory";
    }
}
?>

<hr>

<h3>5. Koszt przejazdu</h3>
<form method="post">
<input type="hidden" name="z" value="5">
cena: <input type="text" name="a"><br>
km: <input type="number" name="b"><br>
spalanie: <input type="text" name="c"><br>
<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==5){
    echo "<hr>";
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if(is_numeric($a) && is_numeric($c)){
        $wynik = ($b/100)*$c*$a;

        echo "cena: $a<br>";
        echo "km: $b<br>";
        echo "spalanie: $c<br>";
        echo "koszt: $wynik zl";
    } else {
        echo "blad danych";
    }
}
?>

<hr>

<h3>6. Pizza</h3>
<form method="post">
<input type="hidden" name="z" value="6">
km: <input type="number" name="a"><br>
<input type="checkbox" name="b">ciepla<br>
<input type="submit">
</form>

<?php
if(isset($_POST['z']) && $_POST['z']==6){
    echo "<hr>";
    $a = $_POST['a'];

    $wynik = $a * 0.5;

    if(isset($_POST['b'])){
        $wynik = $wynik * 1.15;
    }

    echo "koszt: $wynik zl";
}
?>

</body>
</html>