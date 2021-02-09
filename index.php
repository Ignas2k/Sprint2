<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "sprint2";

$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, Vardas, Pareigos FROM Darbuotojai";
$result = mysqli_query($conn, $sql);

print("<table>");
print("<tr><th>ID</th><th>Vardas</th><th>Pareigos</th><th>Veiksmai</th></tr>");

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         print('<tr><td>' . $row["id"] . '</td><td>' . $row["Vardas"] . '</td><td>' .  $row["Pareigos"] . '</td></tr>');
    } 
    } else {
        echo "Nėra rezultatų";
    }
    print("</table>");
    mysqli_close($conn);

?>
