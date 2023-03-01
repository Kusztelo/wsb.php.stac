<?php
$FirstName = "Janusz";
$lastName = "Nowak";
echo "Imie i Nazwisko $FirstName $lastName";
echo 'Imie i Nazwisko $FirstName $lastName';

//heredoc
echo <<< DATA

<hr>
Imie: $FirstName<br>
Nazwisko:$lastName<br>
DATA;
?>