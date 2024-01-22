<?php
$polaczenie = mysqli_connect("localhost","root","","4bt"); //funkcja zwraca uchwyt do połączneia 

$zapytanie = "SELECT * FROM uczniowie";

$dane = mysqli_query($polaczenie,$zapytanie); 

 while($klucz = mysqli_fetch_assoc($dane)){ // pobranie do tablicy asocjacyjnej

    echo $klucz['id_ucznia'] . " " .  $klucz['imie'] . " " . $klucz['nazwisko'] . " " . $klucz['wiek'] . "<br>";

 }


 echo "<BR><br>";
 $dane = mysqli_query($polaczenie,$zapytanie);

while($klucz = mysqli_fetch_row($dane)){ //pobranie do tablicy numeryczenj

    echo $klucz[0] . " " . $klucz[1] . " " . $klucz[2] . " " . $klucz[3] . "<br>";
}

echo "COS TAM" . "COS INNEGO ";

mysqli_close($polaczenie);
?>