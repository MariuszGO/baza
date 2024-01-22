<?php

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$wiek = $_POST['wiek'];

echo " $imie $nazwisko $wiek";

$polaczenie = mysqli_connect("localhost","root","","4bt"); //funkcja zwraca uchwyt do połączneia 

$zapytanie = "INSERT INTO `uczniowie` (`id_ucznia`, `imie`, `nazwisko`, `wiek`) VALUES (NULL, '$imie', '$nazwisko', '$wiek')";

$czy_wyslane = mysqli_query($polaczenie,$zapytanie);

if ($czy_wyslane == TRUE){
    echo "Wysłało dobrze";
}
else{
    echo "BŁĄD";
}

mysqli_close($polaczenie);


echo "<a href='dane1.php'>Wyswietl wyniki</a>"

?>