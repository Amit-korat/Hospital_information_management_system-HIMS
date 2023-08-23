<?php
$server = "localhost";
$username = "root";
$dpassword = "";
$database = "HIMS";

//creat connection
$conn = mysqli_connect($server, $username, $dpassword, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM hospital WHERE email = '$email' AND passwd = '$pass';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        echo "<script>";
        echo "location.replace('index.php')";
        echo "</script>";

    } else {

        echo "<script>alert('Enter a valid details.')</script>";

    }
}
// Close database connection
$conn->close();

?>