<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $name = $_POST['name']; 
    $address = $_POST['address']; 
    $place_of_birth = $_POST['place_of_birth'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];

    echo "<h2>Hasil Input:</h2>";
    echo "NPM: $npm<br>";
    echo "Nama: $name<br>";
    echo "Asal: $address<br>";
    echo "Tempat Tanggal Lahir: $place_of_birth, $date_of_birth<br>";
    echo "Jenis Kelamin: $gender<br>";
    echo "Hobi: $hobbies<br>";
}
?>
