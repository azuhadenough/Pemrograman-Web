<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <h2>Input Data</h2>
    <form action="hasil.php" method="post">
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">Alamat:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="place_of_birth">Tempat Lahir:</label><br>
        <input type="text" id="place_of_birth" name="place_of_birth" required><br><br>

        <label for="date_of_birth">Taggal Lahir:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="gender">Jenis Kelamin:</label><br>
        <input type="radio" id="laki2" name="gender" value="Laki-Laki" required> Laki-Laki<br>
        <input type="radio" id="perempuan" name="gender" value="Perempuan" required> Perempuan<br><br>

        <label for="hobbies">Hobi:</label><br>
        <input type="text" id = "hobbies" name="hobbies" value="Reading"><br>
         

        <input type="submit" value="Submit">
    </form>
</body>
</html>
